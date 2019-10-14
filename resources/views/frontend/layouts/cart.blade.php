<button id="btn_show_cart" type="button" class="btn btn-primary" data-toggle="modal"
        data-target=".bs-popupcart-modal-lg" style="display: none;"></button>
<div class="modal fade bs-popupcart-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times; </span>
                </button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Giỏ
                    hàng </h4>
            </div>
            <div class="modal-body" id="load_info_cart"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tiếp tục mua hàng</button>
                <a href="index.php?route=checkout/checkout" class="btn btn-primary">Tiến hành thanh toán</a></div>
        </div>
    </div>
</div>
<script type="text/javascript"> /* Sau khi tat khung popup cart, cap nhat lai gio hang tren header */
    $('.bs-popupcart-modal-lg').on('hidden.bs.modal', function (e) {
        $.ajax({
            url: 'index.php?route=checkout/cart/getTotalProductInCart',
            type: 'post',
            dataType: 'json',
            beforeSend: function () {
            },
            complete: function () {
            },
            success: function (json) {
                var out = json['total'].substr(0, json['total'].indexOf(' '));
                $('#cart-total').html(out);
                $('#cart > ul').load('index.php?route=common/cart/info ul li');
            }
        });
    }); </script>
