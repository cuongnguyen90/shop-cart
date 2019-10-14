@extends('frontend.layouts.master')

@section('content')
    <section class="bread_crumb py-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="https://freshfood.exdomain.net/"> <span itemprop="name"><i class="fa fa-home"></i></span> </a> <span><i class="fa fa-angle-right"></i></span>
                            <meta itemprop="position" content="1">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="https://freshfood.exdomain.net/san-pham"> <span itemprop="name">Sản phẩm</span> </a> <span><i class="fa fa-angle-right"></i></span>
                            <meta itemprop="position" content="2">
                        </li>
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a itemprop="item" href="{{route('product.detail',['slug'=>$product->slug,'id'=>$product->id])}}"> <strong itemprop="name">{{$product->name}}</strong> </a>
                            <meta itemprop="position" content="3">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="product " itemscope="" itemtype="http://schema.org/Product">
        <meta itemprop="url" content="https://freshfood.exdomain.net/kiwi-xanh">
        <meta itemprop="image" content="https://freshfood.exdomain.net/image/cache/catalog/san-pham/cach-giam-can-thanh-mat-tu-qua-kiwi1-700x700.jpg">

        <script type="text/javascript"> $('.header .header-content .header_services').append($('#header_services-325175394')); </script>
        <div class="container">
            <div class="row">
                <div class="clearfix"></div>
                <div id="content" class="col-sm-12 col-xs-12 col-md-9 ">
                    <div class="details-product">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-5">
                                <div class="large-image">
                                    <a href="https://freshfood.exdomain.net/image/cache/catalog/san-pham/cach-giam-can-thanh-mat-tu-qua-kiwi1-700x700.jpg" data-rel="prettyPhoto[product-gallery]"> <div style="height:313px;width:313px;" class="zoomWrapper"><img id="zoom_01" src="{{URL::to('storage/image/'.$product->img)}}" alt="Kiwi xanh" style="position: absolute;"></div> </a>
                                    <div class="hidden"> </div>
                                </div>
                                <div id="gallery_01" class="owl-carousel owl-theme thumbnail-product owl-loaded owl-drag" data-md-items="4" data-sm-items="4" data-xs-items="4" data-xss-items="2" data-margin="10" data-nav="true">

                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 68px;"><div class="owl-item active" style="width: 57.906px; margin-right: 10px;"><div class="item"> <a class="clearfix" href="#" data-image="https://freshfood.exdomain.net/image/cache/catalog/san-pham/cach-giam-can-thanh-mat-tu-qua-kiwi1-700x700.jpg" data-zoom-image="https://freshfood.exdomain.net/image/cache/catalog/san-pham/cach-giam-can-thanh-mat-tu-qua-kiwi1-100x100.jpg"> <img src="https://freshfood.exdomain.net/image/cache/catalog/san-pham/cach-giam-can-thanh-mat-tu-qua-kiwi1-100x100.jpg" alt="Kiwi xanh"> </a> </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="fa fa-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-7 details-pro">
                                <h1 class="title-head" itemprop="name">{{$product->name}}</h1>
                                <div class="reviews clearfix">
                                    <div class="f-left margin-right-10">
                                        <div class="zozoweb-product-reviews-badge">
                                            <div class="zozoweb-product-reviews-star" style="color: rgb(255, 190, 0);"> <i data-alt="1" class="star-off-png"></i>&nbsp; <i data-alt="2" class="star-off-png"></i>&nbsp; <i data-alt="3" class="star-off-png"></i>&nbsp; <i data-alt="4" class="star-off-png"></i>&nbsp; <i data-alt="5" class="star-off-png"></i>&nbsp; </div>
                                        </div>
                                    </div>
                                    <!--<div class="f-left iddanhgia" onclick="scrollToxx();">-->
                                    <div class="f-left iddanhgia" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"> <span>Viết đánh giá</span> </div>
                                </div>
                                <div class="status clearfix">
                                    <div class="clearfix"> Mã sản phẩm: <strong itemprop="model">KX433865</strong> </div>
                                    <div class="clearfix"> Tình trạng: <span class="inventory">Còn trong kho</span> </div>
                                </div>
                                <div class="price-box clearfix">
                                    <div class="special-price"> <span class="price product-price">119,000đ</span> </div>
                                    <span itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
													<meta itemprop="price" content="119000">
													<meta itemprop="priceCurrency" content="VND">
												</span>
                                    <ul class="list-unstyled"> </ul>
                                </div>
                                <div class="product-summary product_description margin-bottom-15"> </div>
                                <div id="product" class="form-product">
                                    <div class="margin-bottom-10 dqdt-form form">
                                        <div class="box-variant clearfix "> <input type="hidden" name="product_id" value="86"> </div>
                                        <div class="form-group form-groupx form-detail-action clearfix">
                                            <label class="f-left" for="input-quantity">Số lượng</label>
                                            <div class="custom custom-btn-number"> <span class="qtyminus" data-field="quantity">-</span> <input type="text" class="input-text qty" data-field="quantity" title="Số lượng" maxlength="12" id="input-quantity" name="quantity" value="1" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == '')this.value=1;"> <span class="qtyplus" data-field="quantity">+</span> </div>
                                            <button class="btn btn-lg btn-primary btn-cart btn-cart2 add_to_cart btn_buy add_to_cart" type="button" id="button-cart" data-loading-text="Đang tải..."> <span>Thêm vào giỏ <i class="fa .fa-caret-right"></i></span> </button>
                                        </div>
                                    </div>
                                    <div class="social-sharing">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-lg-12 margin-top-15 margin-bottom-10">
                                <div class="product-tab e-tabs">
                                    <ul class="tabs tabs-title clearfix">
                                        <li class="tab-link current" data-tab="tab-description">
                                            <h3 href="#tab-description" data-toggle="tab"> <span>Mô tả</span> </h3>
                                        </li>
                                        <li class="tab-link" data-tab="tab-review">
                                            <h3 href="#tab-review" data-toggle="tab"> <span>Đánh giá (0)</span> </h3>
                                        </li>
                                    </ul>
                                    <div class="tab-description tab-content current" id="tab-description">
                                        <div class="rte"></div>
                                    </div>
                                    <div class="tab-review tab-content" id="tab-review">
                                        <div id="zozoweb-product-reviews" class="zozoweb-product-reviews" data-id="11480172">
                                            <div>
                                                <div id="zozoweb-product-reviews-sub">
                                                    <div id="zozoweb-product-reviews-summary" class="zozoweb-product-reviews-summary">
                                                        <div>
                                                            <div itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating" class="bpr-summary">
                                                                <meta content="5" itemprop="bestRating">
                                                                <meta content="1" itemprop="worstRating">
                                                                <meta content="0" itemprop="ratingCount">
                                                                <span class="bpr-summary-average" itemprop="ratingValue">0</span>
                                                                <div data-number="5" data-score="0" class="zozoweb-product-reviews-star" id="zozoweb-prv-summary-star" style="color: rgb(255, 190, 0);"> <i data-alt="1" class="star-off-png"></i>&nbsp; <i data-alt="2" class="star-off-png"></i>&nbsp; <i data-alt="3" class="star-off-png"></i>&nbsp; <i data-alt="4" class="star-off-png"></i>&nbsp; <i data-alt="5" class="star-off-png"></i>&nbsp; </div>
                                                                <div class="bpr-summary-caption">
                                                                    <div></div>
                                                                    <div>
                                                                        <div>
                                                                            <p>0</p>
                                                                        </div>
                                                                        <div><img height="15" width="16" src="/catalog/view/theme/freshfood/image/user.png"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="display:none;" id="bpr-thanks" class="zozoweb-product-reviews-form"></div>
                                                    <div id="review" class="bpr-list zozoweb-product-reviews-list"></div>
                                                </div>
                                                <form class="form-horizontal" id="form-review">
                                                    <h2>Viết đánh giá</h2>
                                                    <fieldset class="form-group required">
                                                        <div class=""> <label class="control-label" for="input-name">Họ tên</label> <input type="text" name="name" value="" id="input-name" class="form-control"> </div>
                                                    </fieldset>
                                                    <fieldset class="form-group required">
                                                        <div class="">
                                                            <label class="control-label" for="input-review">Nội dung đánh giá</label>
                                                            <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                                                            <div class="help-block"><span class="text-danger">Chú ý:</span> Không sử dụng các định dạng HTML!</div>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset class="form-group required">
                                                        <div class="rating_review"> <label class="control-label">Xếp hạng</label> &nbsp;&nbsp;&nbsp; Chưa tốt&nbsp; <input type="radio" name="rating" value="1">&nbsp; <input type="radio" name="rating" value="2">&nbsp; <input type="radio" name="rating" value="3">&nbsp; <input type="radio" name="rating" value="4">&nbsp; <input type="radio" name="rating" value="5">&nbsp; Tốt</div>
                                                    </fieldset>
                                                    <div class="buttons clearfix">
                                                        <div class="pull-right"> <button type="button" id="button-review" data-loading-text="Đang tải..." class="btn btn-primary">Tiếp tục</button> </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="fb-comments" data-href="https://freshfood.exdomain.net/kiwi-xanh" data-width="100%" data-numposts="5"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 col-md-3 sidebar clearfix">
                    <aside id="column-right" class="right-column compliance aside-vetical-menu">
                        <div class="aside-item aside-mini-list-product mb-5 product_special " id="product_special-0">
                            <div>
                                <div class="aside-title">
                                    <h2 class="title-head"> <a href="https://freshfood.exdomain.net/san-pham-giam-gia">Sản phẩm khuyến mãi</a> </h2>
                                </div>
                                <div class="aside-content related-product">
                                    <div class="product-mini-lists">
                                        <div class="products">
                                            <div class="row row-noGutter">
                                                <div class="col-sm-12">
                                                    <div class="product-mini-item clearfix" itemscope="" itemtype="http://schema.org/Product">
                                                        <div class="product-img relative">
                                                            <a href="https://freshfood.exdomain.net/man-sapa" title="Mận Sapa"> <img src="https://freshfood.exdomain.net/image/cache/catalog/san-pham/product-6-240x240.jpg" alt="Mận Sapa" itemprop="image"> </a>
                                                            <div class="sale-flash">
                                                                <div class="before"></div>
                                                                -50%
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3> <a href="https://freshfood.exdomain.net/man-sapa" title="Mận Sapa" class="product-name" itemprop="url"> <span itemprop="name">Mận Sapa</span> </a> </h3>
                                                            <div class="price-box" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                <div class="special-price"> <span class="price product-price">45,000đ</span> </div>
                                                                <div class="old-price"> <span class="price product-price-old">90,000đ</span> </div>
                                                                <meta itemprop="price" content="45000">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row-noGutter">
                                                <div class="col-sm-12">
                                                    <div class="product-mini-item clearfix" itemscope="" itemtype="http://schema.org/Product">
                                                        <div class="product-img relative">
                                                            <a href="https://freshfood.exdomain.net/tao-do-my" title="Táo đỏ Mỹ"> <img src="https://freshfood.exdomain.net/image/cache/catalog/san-pham/Taodo-240x240.jpg" alt="Táo đỏ Mỹ" itemprop="image"> </a>
                                                            <div class="sale-flash">
                                                                <div class="before"></div>
                                                                -34%
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3> <a href="https://freshfood.exdomain.net/tao-do-my" title="Táo đỏ Mỹ" class="product-name" itemprop="url"> <span itemprop="name">Táo đỏ Mỹ</span> </a> </h3>
                                                            <div class="price-box" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                <div class="special-price"> <span class="price product-price">99,000đ</span> </div>
                                                                <div class="old-price"> <span class="price product-price-old">150,000đ</span> </div>
                                                                <meta itemprop="price" content="99000">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row-noGutter">
                                                <div class="col-sm-12">
                                                    <div class="product-mini-item clearfix" itemscope="" itemtype="http://schema.org/Product">
                                                        <div class="product-img relative">
                                                            <a href="https://freshfood.exdomain.net/dau-tay" title="Dâu tây"> <img src="https://freshfood.exdomain.net/image/cache/catalog/san-pham/Dautay-240x240.jpg" alt="Dâu tây" itemprop="image"> </a>
                                                            <div class="sale-flash">
                                                                <div class="before"></div>
                                                                -38%
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3> <a href="https://freshfood.exdomain.net/dau-tay" title="Dâu tây" class="product-name" itemprop="url"> <span itemprop="name">Dâu tây</span> </a> </h3>
                                                            <div class="price-box" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                <div class="special-price"> <span class="price product-price">199,000đ</span> </div>
                                                                <div class="old-price"> <span class="price product-price-old">320,000đ</span> </div>
                                                                <meta itemprop="price" content="199000">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row row-noGutter">
                                                <div class="col-sm-12">
                                                    <div class="product-mini-item clearfix" itemscope="" itemtype="http://schema.org/Product">
                                                        <div class="product-img relative">
                                                            <a href="https://freshfood.exdomain.net/ca-chua" title="Cà chua"> <img src="https://freshfood.exdomain.net/image/cache/catalog/san-pham/Tomato-240x240.jpg" alt="Cà chua" itemprop="image"> </a>
                                                            <div class="sale-flash">
                                                                <div class="before"></div>
                                                                -30%
                                                            </div>
                                                        </div>
                                                        <div class="product-info">
                                                            <h3> <a href="https://freshfood.exdomain.net/ca-chua" title="Cà chua" class="product-name" itemprop="url"> <span itemprop="name">Cà chua</span> </a> </h3>
                                                            <div class="price-box" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                                <div class="special-price"> <span class="price product-price">35,000đ</span> </div>
                                                                <div class="old-price"> <span class="price product-price-old">50,000đ</span> </div>
                                                                <meta itemprop="price" content="35000">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <section class="section featured-product wow fadeInUp mb-4">
            <div class="container">
                <div class="section-title a-center">
                    <h2> <a href="javascript:void(0)">Sản phẩm Liên quan</a> </h2>
                </div>
                <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs owl-loaded owl-drag" data-nav="true" data-lgg-items="4" data-lg-items="4" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xss-items="2">




                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1170px;"><div class="owl-item active" style="width: 262.5px; margin-right: 30px;"><div class="item item-carousel">
                                    <div class="product-box" itemscope="" itemtype="http://schema.org/Product">
                                        <div class="product-thumbnail flexbox-grid">
                                            <a href="https://freshfood.exdomain.net/cam-my" title="Cam Mỹ"> <img src="https://freshfood.exdomain.net/image/cache/catalog/san-pham/Cam-300x300.jpg" alt="Cam Mỹ" itemprop="image"> </a>
                                            <div class="product-action hidden-md hidden-sm hidden-xs clearfix">
                                                <form class="form variants form-nut-grid margin-bottom-0">
                                                    <div> <a class="btn-buy btn-cart btn btn-primary left-to add_to_cart" data-toggle="tooltip" title="" href="https://freshfood.exdomain.net/index.php?route=checkout/cart/add&amp;product_id=85&amp;redirect=true" data-original-title="Mua ngay"> <i class="fa fa-shopping-bag"></i> </a> <a href="https://freshfood.exdomain.net/cam-my" data-toggle="tooltip" title="" class="btn-gray btn_view btn right-to" data-original-title="Xem"><i class="fa fa-eye"></i></a> </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info a-center">
                                            <h3 class="product-name"> <a href="https://freshfood.exdomain.net/cam-my" title="Cam Mỹ" itemprop="url"> <span itemprop="name">Cam Mỹ</span> </a> </h3>
                                            <div class="price-box clearfix" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                <div class="special-price"> <span class="price product-price">156,000đ</span> </div>
                                                <meta itemprop="price" content="156000">
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 30px;"><div class="item item-carousel">
                                    <div class="product-box" itemscope="" itemtype="http://schema.org/Product">
                                        <div class="product-thumbnail flexbox-grid">
                                            <a href="https://freshfood.exdomain.net/chuoi" title="Chuối"> <img src="https://freshfood.exdomain.net/image/cache/catalog/san-pham/Chuoi-300x300.jpg" alt="Chuối" itemprop="image"> </a>
                                            <div class="product-action hidden-md hidden-sm hidden-xs clearfix">
                                                <form class="form variants form-nut-grid margin-bottom-0">
                                                    <div> <a class="btn-buy btn-cart btn btn-primary left-to add_to_cart" data-toggle="tooltip" title="" href="https://freshfood.exdomain.net/index.php?route=checkout/cart/add&amp;product_id=84&amp;redirect=true" data-original-title="Mua ngay"> <i class="fa fa-shopping-bag"></i> </a> <a href="https://freshfood.exdomain.net/chuoi" data-toggle="tooltip" title="" class="btn-gray btn_view btn right-to" data-original-title="Xem"><i class="fa fa-eye"></i></a> </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info a-center">
                                            <h3 class="product-name"> <a href="https://freshfood.exdomain.net/chuoi" title="Chuối" itemprop="url"> <span itemprop="name">Chuối</span> </a> </h3>
                                            <div class="price-box clearfix" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                <div class="special-price"> <span class="price product-price">60,000đ</span> </div>
                                                <meta itemprop="price" content="60000">
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 30px;"><div class="item item-carousel">
                                    <div class="product-box" itemscope="" itemtype="http://schema.org/Product">
                                        <div class="product-thumbnail flexbox-grid">
                                            <a href="https://freshfood.exdomain.net/chanh-vang" title="Chanh vàng"> <img src="https://freshfood.exdomain.net/image/cache/catalog/san-pham/product-4-300x300.jpg" alt="Chanh vàng" itemprop="image"> </a>
                                            <div class="product-action hidden-md hidden-sm hidden-xs clearfix">
                                                <form class="form variants form-nut-grid margin-bottom-0">
                                                    <div> <a class="btn-buy btn-cart btn btn-primary left-to add_to_cart" data-toggle="tooltip" title="" href="https://freshfood.exdomain.net/index.php?route=checkout/cart/add&amp;product_id=83&amp;redirect=true" data-original-title="Mua ngay"> <i class="fa fa-shopping-bag"></i> </a> <a href="https://freshfood.exdomain.net/chanh-vang" data-toggle="tooltip" title="" class="btn-gray btn_view btn right-to" data-original-title="Xem"><i class="fa fa-eye"></i></a> </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info a-center">
                                            <h3 class="product-name"> <a href="https://freshfood.exdomain.net/chanh-vang" title="Chanh vàng" itemprop="url"> <span itemprop="name">Chanh vàng</span> </a> </h3>
                                            <div class="price-box clearfix" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                <div class="special-price"> <span class="price product-price">98,000đ</span> </div>
                                                <meta itemprop="price" content="98000">
                                            </div>
                                        </div>
                                    </div>
                                </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 30px;"><div class="item item-carousel">
                                    <div class="product-box" itemscope="" itemtype="http://schema.org/Product">
                                        <div class="product-thumbnail flexbox-grid">
                                            <a href="https://freshfood.exdomain.net/man-sapa" title="Mận Sapa"> <img src="https://freshfood.exdomain.net/image/cache/catalog/san-pham/product-6-300x300.jpg" alt="Mận Sapa" itemprop="image"> </a>
                                            <div class="sale-flash">
                                                <div class="before"></div>
                                                -50%
                                            </div>
                                            <div class="product-action hidden-md hidden-sm hidden-xs clearfix">
                                                <form class="form variants form-nut-grid margin-bottom-0">
                                                    <div> <a class="btn-buy btn-cart btn btn-primary left-to add_to_cart" data-toggle="tooltip" title="" href="https://freshfood.exdomain.net/index.php?route=checkout/cart/add&amp;product_id=82&amp;redirect=true" data-original-title="Mua ngay"> <i class="fa fa-shopping-bag"></i> </a> <a href="https://freshfood.exdomain.net/man-sapa" data-toggle="tooltip" title="" class="btn-gray btn_view btn right-to" data-original-title="Xem"><i class="fa fa-eye"></i></a> </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="product-info a-center">
                                            <h3 class="product-name"> <a href="https://freshfood.exdomain.net/man-sapa" title="Mận Sapa" itemprop="url"> <span itemprop="name">Mận Sapa</span> </a> </h3>
                                            <div class="price-box clearfix" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                                <div class="special-price"> <span class="price product-price">45,000đ</span> </div>
                                                <div class="old-price"> <span class="price product-price-old">90,000đ</span> </div>
                                                <meta itemprop="price" content="45000">
                                            </div>
                                        </div>
                                    </div>
                                </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="fa fa-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
            </div>
        </section>
        <div class="container">
            <section class="awe-section-12 carousel_partner module_carousel " id="carousel-0">
                <div class="section section-brand mb-5">
                    <div class="container">
                        <h2 class="hidden">Partner</h2>
                        <div class="owl-carousel owl-theme owl-loaded owl-drag" data-nav="true" data-lg-items="6" data-md-items="6" data-sm-items="2" data-xs-items="2">






                            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1140px;"><div class="owl-item active" style="width: 160px; margin-right: 30px;"><div class="brand-item"> <a href="javascript:void(0)" class="img25"> <img src="https://freshfood.exdomain.net/image/cache/catalog/hang-san-xuat/brand1-165x80.png" alt="brand 1"> </a> </div></div><div class="owl-item active" style="width: 160px; margin-right: 30px;"><div class="brand-item"> <a href="javascript:void(0)" class="img25"> <img src="https://freshfood.exdomain.net/image/cache/catalog/hang-san-xuat/brand2-165x80.png" alt="brand 2"> </a> </div></div><div class="owl-item active" style="width: 160px; margin-right: 30px;"><div class="brand-item"> <a href="javascript:void(0)" class="img25"> <img src="https://freshfood.exdomain.net/image/cache/catalog/hang-san-xuat/brand3-165x80.png" alt="brand 3"> </a> </div></div><div class="owl-item active" style="width: 160px; margin-right: 30px;"><div class="brand-item"> <a href="javascript:void(0)" class="img25"> <img src="https://freshfood.exdomain.net/image/cache/catalog/hang-san-xuat/brand4-165x80.png" alt="brand 4"> </a> </div></div><div class="owl-item active" style="width: 160px; margin-right: 30px;"><div class="brand-item"> <a href="javascript:void(0)" class="img25"> <img src="https://freshfood.exdomain.net/image/cache/catalog/hang-san-xuat/brand5-165x80.png" alt="brand 5"> </a> </div></div><div class="owl-item active" style="width: 160px; margin-right: 30px;"><div class="brand-item"> <a href="javascript:void(0)" class="img25"> <img src="https://freshfood.exdomain.net/image/cache/catalog/hang-san-xuat/brand6-165x80.png" alt="brand 6"> </a> </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="fa fa-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
