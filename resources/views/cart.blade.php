@extends('layouts.master')
@section('title')
    <title>Laravel Website - Cart </title>
@endsection
@section('content')

    <section class="page">

        <div class="container">

            <div class="row">
                <div id="content" class="col-sm-12 col-xs-12 col-md-12">
                    <h3>Giỏ hàng</h3>

                    <form action="{{''}}" method="post"
                          enctype="multipart/form-data">
                        <div class="table-responsive table-cart-content">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <td class="text-center">
                                        <strong>Ảnh</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>Sản phẩm</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>Đơn giá</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>Số lượng</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>Tổng</strong>
                                    </td>
                                    <td class="text-center">
                                        <strong>Xóa</strong>
                                    </td>
                                </tr>
                                </thead>
                                <tbody>
                                @if(Session::get('cart')->totalQty > 0)
                                    @foreach(Session::get('cart')->items as $product)

                                        <tr>
                                            <td class="text-center">
                                                <img
                                                    src="{{URL::to('storage/image/'.$product['item']->img)}}"
                                                    alt="Cam Mỹ" title="Cam Mỹ" width="100">
                                            </td>
                                            <td class="text-left">
                                                <a href="#">{{$product['item']->name}}</a>
                                            </td>
                                            <td class="text-right">{{number_format($product['item']->price)}}VND</td>
                                            <td class="text-left">
                                                <div class="input-group btn-block">
                                                    <input type="text" name="" value="{{$product['qty']}}" size="1"
                                                           class="form-control">
                                                    <span class="input-group-btn">
											<button type="submit" data-toggle="tooltip" title="" class="btn btn-primary"
                                                    data-original-title="Cập nhật">
												<i class="fa fa-refresh"></i>
											</button>
										</span>
                                                </div>
                                            </td>
                                            <td class="text-right"> {{number_format($product['price'])}}VND</td>
                                            <td class="text-center">
                                                <a href="{{route('remove.item',['id'=>$product['item']->id])}}"
                                                   type="button" data-toggle="tooltip" title=""
                                                   class="btn btn-danger"
                                                   data-original-title="Xóa">
                                                    <i class="fa fa-times-circle"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <td colspan="6" class="text-center">Gio hang trong !</td>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </form>
                    @if(Session::get('cart')->totalQty > 0)
                    <div class="row">
                        <div class="col-sm-12"></div>
                        <div class="col-sm-4 col-sm-offset-8">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td class="text-right">Thành tiền:</td>
                                    <td class="text-right">
                                        <strong>{{number_format($totalPrice)}} VND</strong>
                                    </td>
                                </tr>
                                {{-- <tr>
                                     <td class="text-right">Phí vận chuyển Toàn Quốc:</td>
                                     <td class="text-right">
                                         <strong>0.00€</strong>
                                     </td>
                                 </tr>--}}
                                <tr>
                                    <td class="text-right">Tổng số:</td>
                                    <td class="text-right">
                                        <strong>{{number_format($totalPrice)}} VND</strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6 col-xs-6 col_button_shopping">
                                    <a class="btn btn-success" href="{{URL::to('')}}"
                                       class="btn btn-default pull-left button_shopping">Tiếp tục mua hàng</a>
                                </div>
                                <div class="col-sm-6 col-xs-6 col_button_checkout">
                                    <a href="https://freshfood.exdomain.net/checkout/checkout"
                                       class="btn btn-primary pull-right button_checkout">Tiến hành thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
