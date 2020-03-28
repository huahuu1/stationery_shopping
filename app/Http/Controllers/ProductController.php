<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller
{
    //admin
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pageSize = $request->pageSize ?? 5;

        $path = '';
        if(!$keyword){
            $path .= "?pageSize=$pageSize";
            $products = Product::orderBy('id', 'ASC')->paginate($pageSize);
        } else {
            $path .= "?pageSize=$pageSize&keyword=$keyword";
            $products = Product::where('name', 'like', '%'. $keyword .'%')
                                // ->orWhere('description', 'like', '%'. $keyword .'%')
                                ->orderBy('id', 'ASC')
                                ->paginate($pageSize);
        }

        $products->withPath($path);

        return view('admin.products.index', compact('products', 'keyword'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        //nhan tat ca tham so vao mang product
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'image',
            'sell_price' => 'required',
            'category_id' => 'required'
        ]);
        $product = $request->all();
        //xu ly upload hinh anh vao thu muc
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = 'uploads/products/'.time().$file->getClientOriginalName();
            $file->move(public_path('uploads/products'), $imageName);
        } else {
            $imageName = null;
        }
        $p = new Product($product);
        $p->image = $imageName;
        $p->save();

        return redirect()->route('products.index');

    }
    public function show($id)
    {
        // Eloquent way
        $product = Product::find($id);
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product, $id)
    {
        $products = Product::all();
        $product = Product::find($id);
        return view('admin.products.edit', compact('products', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'image' => 'image',
            'sell_price' => 'required',
            'category_id' => 'required'
        ]);

        $product = Product::find($id);
        //xu ly upload hinh anh vao thu muc
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = 'uploads/products/'.time().$file->getClientOriginalName();
            $file->move('uploads/products/', $imageName);
        } else {
            $imageName = $product->image;
        }

        $product->name = $request->name;
        $product->slug = $request->slug;
        $product->image = $imageName;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->sell_price = $request->sell_price;
        $product->category_id = $request->category_id;
        $product->sub_category_id = $request->sub_category_id;
        $product->supplier_id = $request->supplier_id;
        $product->status = $request->status;

        $product->save();

        return redirect(route('products.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $Product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect(route('products.index'));
    }

    //website
    public function searchProducts(Request $request) {
        $keyword = $request->keyword;
        $pageSize = $request->pageSize ?? 12;
        $count = 0;
        $path = '';
        if(!$keyword){
            $path .= "?pageSize=$pageSize";
            $products = Product::orderBy('id', 'ASC')->paginate($pageSize);
        } else {
            $path .= "?pageSize=$pageSize&keyword=$keyword";
            $products = Product::where('name', 'like', '%'. $keyword .'%')
                                ->where('status', 1)
                                ->orderBy('id', 'ASC')
                                ->paginate($pageSize);
            $count = $products->total();
        }

        $breadcrums = "<div class='category-page-title'>
                            <div class='nav'><a href='/'>Home</a><span class='divider'>/</span><a href='#'>Search Result</a></div>
                        </div>";

        $products->withPath($path);
        return view('layouts.product-search-result', compact('products', 'keyword', 'breadcrums', 'count'));
    }


    // cart
    public function cart()
    {
        return view('layouts.cart');
    }

    public function addToCart(Request $request, $id)
    {
        $user = Auth::user();
        $product = Product::find($id);
        if (!$product) {
            abort(404);
        }
        // check trong session truoc
        $cart = session()->get('cart');

        //neu session ko co, thi lay trong cookie
        if (!$cart) {
            $cart = json_decode(Cookie::get('cart_' . $user->id), true);
        }

        // if cart is empty then this the first product
        if (!$cart) {
            $cart = [
                $id => [
                    "id" => $product->id,
                    "image" => $product->image,
                    "name" => $product->name,
                    "sell_price" => $product->sell_price,
                    "quantity" => $request->quantity
                ]
            ];
        } else if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $request->quantity;
        } else {
            // if item not exist in cart then add to cart with quantity
            $cart[$id] = [
                "id" => $product->id,
                "image" => $product->image,
                "name" => $product->name,
                "sell_price" => $product->sell_price,
                "quantity" => $request->quantity
            ];
        }

        // write to session
        session()->put('cart', $cart);

        // write to cookie
        Cookie::queue(Cookie::make('cart_' . $user->id, json_encode($cart), 60));

        return redirect()->route('carts.detail');
    }

    /**
     * getCartTotal
     *
     *
     * @return float|int
     */

    public function getCartTotal()
    {
        $user = Auth::user();
        $total = 0;

        $cart = session()->get('cart');

        if (!$cart) {
            $cart = json_decode(Cookie::get('cart_' . $user->id), true);
            foreach($cart as $id => $details) {
                $total += $details['sell_price'] * $details['quantity'];
            }
        }

        foreach($cart as $id => $details) {
            $total += $details['sell_price'] * $details['quantity'];
        }

        return number_format($total);
    }

    public function getCartQuantity()
    {
        $user = Auth::user();
        $total = 0;

        $cart = session()->get('cart');

        if (!$cart) {
            $cart = json_decode(Cookie::get('cart_' . $user->id), true);
        }

        foreach($cart as $id => $details) {
            $total += $details['quantity'];
        }

        return $total;
    }

    public function updateCart(Request $request)
    {
        $user = Auth::user();
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
            if (!$cart) {
                $cart = json_decode(Cookie::get('cart_' . $user->id), true);
            }

            $cart[$request->id]["quantity"] = $request->quantity;
            // write to session
            session()->put('cart', $cart);

            // write to cookie
            Cookie::queue(Cookie::make('cart_' . $user->id, json_encode($cart), 60));

            $total = $this->getCartTotal();

            $quantity = $this->getCartQuantity();

            $htmlCart = view('_header_cart')->render();

            return response()->json(['msg' => 'Cart updated successfully', 'data' => $htmlCart, 'total' => $total, 'quantity' => $quantity]);
        }
    }

    public function removeCart(Request $request)
    {
        $user = Auth::user();

        if ($request->id) {

            $cart = session()->get('cart');
            $count = 0;

            if (!$cart) {
                $cart = json_decode(Cookie::get('cart_' . $user->id), true);
                if($cart) {
                    $count = count($cart);
                }
            }

            if($cart) {
                $count = count($cart);
            }

            if(isset($cart[$request->id])) {
                // xoa trong session
                unset($cart[$request->id]);
                $request->session()->forget('cart');
                session()->put('cart', $cart);

                // write to cookie
                Cookie::queue(Cookie::make('cart_' . $user->id, json_encode($cart), 60));

            }

            $total = $this->getCartTotal();

            $quantity = $this->getCartQuantity();

            $htmlCart = view('_header_cart')->render();

            return response()->json(['msg' => 'Product removed successfully', 'data' => $htmlCart, 'total' => $total, 'quantity' => $quantity, 'count' => $count]);
        } else {
            return response()->json(['message' => 'Unknown error'], 404);
        }
    }

}
