<div class="container" style="padding: 2.5rem 0">
    <div class="row">
        <span id="status" class="col-12"></span>
        <div class="col-12 col-sm-12 col-md-8 cartDetails">
            <form action="" method="">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">ITEM</th>
                            <th>PRICE</th>
                            <th>QUANTITY</th>
                            <th>TOTAL</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $total = 0;
                        $qty = 0;
                        @endphp
                        @if ($cart)
                        @foreach ($cart as $id => $details)
                        @php
                        $total += $details['sell_price'] * $details['quantity'];
                        $qty += $details['quantity'];
                        @endphp
                        <tr>
                            <td class="productThumbnail"><a href="#"><img src="{{$details['image']}}" width="100px"
                                        height="100px" alt="" /></a></td>

                            <td class="productName">{{Str::limit($details['name'], 32)}}</td>

                            <td class="productPrice" style="font-weight: 500">{{number_format($details['sell_price'])}}
                                đ</td>

                            <td class="productQuantity" data-th="Quantity">
                                <div class="quantityControl d-flex">
                                    <input type='button' value='-' class='qtyminus btnMinus' field='updates_{{ $id}}' />
                                    <input type="number" min="0" name="updates[]" id="updates_{{ $id }}"
                                        class="quantity" value="{{ $details['quantity'] }}" />
                                    <input type='button' value='+' class='qtyplus btnPlus' field='updates_{{ $id }}' />
                                </div>
                            </td>
                            <td class="productTotal cart-total" style="font-weight: 500">
                                {{number_format($details['sell_price'] * $details['quantity'])}} đ
                            </td>

                            <td class="actions" data-th="">
                                <button class="btn btn-info update-cart p-3" data-id="{{ $id }}"><i
                                        class="fa fa-refresh"></i></button>

                                <button class="btn btn-danger remove-from-cart p-3" data-id="{{ $id }}"><i class="far fa-trash-alt"></i></button>
                                <i class="fa fa-circle-o-notch fa-spin btn-loading"
                                    style="font-size:24px; display: none"></i>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                        <tr>
                            <td colspan="6">
                                <div class="row">
                                    <div class="btnCartOut col-sm-6 col-md-6 col-lg-6 mx-auto"><a href="{{route('categories.all')}}">← CONTINUE TO VIEW PRODUCTS</a></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
        <div class="col-12 col-sm-12 col-md-4 cartContext">
            <table>
                <thead>
                    <tr>
                        <th colspan="2">BILL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Quantity</td>
                        <td style="font-weight: 500; text-align: right" class="cart-qty">{{ $qty }}</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td style="font-weight: 500; text-align: right" class="cart-total">{{ number_format($total) }} đ
                        </td>
                    </tr>
                </tbody>
            </table>
            <form class="form-group shipping" action="" method="POST">
                <label for="" class="shipping-title">Shipping Address</label>
                <input type="text" class="form-control" id="ship-address" class="ship-address" required>
            </form>
            <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="cartPayment btn btn-primary px-4 py-3">PROCEED TO
                CONFIRM</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Shipping & Billing</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <i class="fas fa-map-marker-alt"></i>
                                <label for="">Name: {{Auth::user()->name}}</label>
                            </div>
                            <hr>
                            <div class="form-group">
                                <i class="fas fa-phone"></i>
                                <label for="">Phone: {{Auth::user()->phone}}</label>
                            </div>
                            <hr>
                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <label for="">Email: {{Auth::user()->email}}</label>
                            </div>
                            <hr>
                            <div class="form-group">
                                <i class="fas fa-map-marker-alt"></i>
                                <label for="">Shipping Address: <span class="address"></span></label>

                            </div>
                          </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <form action="{{route('orders.place_order')}}" method="post">
                                @csrf
                                <input type="hidden" class="form-control od_address" value="" name="address">
                                <button type="submit" class="btn btn-primary">Place Order</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@section('scripts-cart')
<script type="text/javascript">


    $(".cartPayment").click(function () {
    var address = $('#ship-address').val();
        $(".address").html(address);
        $(".od_address").val(address);
    });

    $(".update-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        var parent_row = ele.parents("tr");

        var quantity = parent_row.find(".quantity").val();

        var cart_total = $(".cart-total");

        var cart_qty = $(".cart-qty");

        var loading = parent_row.find(".btn-loading");

        loading.show();

        $.ajax({
            url: '{{ url('update-cart') }}',
            method: "patch",
            data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: quantity},
            dataType: "json",
            success: function (response) {

                loading.hide();

                $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');

                $("#header-bar").html(response.data);

                cart_total.text(response.total);
                cart_qty.text(response.quantity);
            }
        });
    });

    $(".remove-from-cart").click(function (e) {
        e.preventDefault();

        var ele = $(this);

        var parent_row = ele.parents("tr");

        var cart_total = $(".cart-total");

        var cart_qty = $(".cart-qty");

        if(confirm("Are you sure")) {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                dataType: "json",
                success: function (response) {

                    parent_row.remove();

                    $("span#status").html('<div class="alert alert-success">'+response.msg+'</div>');

                    $("#header-bar").html(response.data);

                    cart_total.text(response.total);
                    cart_qty.text(response.quantity);
                }
            });
        }
    });

</script>

@endsection