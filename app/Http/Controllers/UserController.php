<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
// use App\Http\Controllers\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pageSize = $request->pageSize ?? 5;

        $path = '';
        if(!$keyword){
            $path .= "?pageSize=$pageSize";
            $users = User::orderBy('id', 'ASC')->paginate($pageSize);
        } else {
            $path .= "?pageSize=$pageSize&keyword=$keyword";
            $users = User::where('name', 'like', '%'. $keyword .'%')
                                ->orWhere('email', 'like', '%'. $keyword .'%')
                                ->orderBy('id', 'ASC')
                                ->paginate($pageSize);
        }

        $users->withPath($path);

        return view('admin.users.index', compact('users', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'min:8',
            'password_confirmation' => 'required_with:password|same:password|min:8',
        ]);

        $user = $request->all();
        $u = new User($user);
        $u->name = $request->name;
        $u->email = $request->email;
        $u->password = Hash::make($request->password);

        $u->save();

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, $id)
    {
        $user = User::find($id);
        //viet trong cho tra ra cart detail
        $products = DB::select(DB::raw("
        select u.*, o.id, o.address as user_address, p.name as product_name  from users as u
        left join orders as o on u.id = o.user_id
        left join order_product as op on o.id = op.order_id
        left join products as p on op.product_id = p.id

        where u.id = $id"));
        dd($products);

        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(User $user, Request $request, $id)
    {
        $user = User::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt(request('password'));
        $user->save();
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
