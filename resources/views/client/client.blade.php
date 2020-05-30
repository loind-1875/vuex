@extends('client.layout.main')

@section('title')
    HFT Hóa Chất và Động cơ
@endsection

@section('content')
    <section class="slider-main">
        <div class="wp-slider-home">
            <div id="slider-home" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="item-slider-home">
                        <div class="wp-img">
                            <a href="#">
                                <img src="{{ asset(config('media.client.other') . 'slide-1.png') }}" alt="">
                            </a>
                        </div>
                        <div class="wp-caption-slider">
                            <div class="text-slider">
                                <span class="ff-emib"><b class="ff-emih"></b></span><br>
                                <b class="size-36 ff-emibb"></b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="item-slider-home">
                        <div class="wp-img">
                            <a href="#">
                                <img src="{{ asset(config('media.client.other') . 'slide-4.png') }}" alt="">
                            </a>
                        </div>
                        <div class="wp-caption-slider">
                            <div class="text-slider">
                                <span class="ff-emib"><b class="ff-emih"></b></span><br>
                                <b class="size-36 ff-emibb"></b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h1 class="hidden">HFT Hóa Chất và Động cơ </h1>

    <section class="sec-b1 pd-40">
        <div class="container">
            <div class="wp-sec-gt">
                <div class="title-sec text-center wow fadeInUp" data-wow-duration="1.6s">
                    <h3>Giới thiệu chung</h3>

                    <p class="sologan-title text-center">Tiêu chí - Tầm nhìn - Sứ mệnh</p>
                </div>
                <div class="wp-gt">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="1.6s">
                            <div class="wp-img-gt">
                                <a href="gioi-thieu-chung.html">
                                    <img src="{{ asset(config('media.client.other') . 'untitled-12.png') }}" alt="Giới thiệu chung">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1.6s">
                            <div class="wp-text-gt">
                                <p style="text-align: center;"><b style="text-align: justify;"><i><span style="font-size: 16pt; line-height: 24.5333px; font-family: &quot;Times New Roman&quot;, serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;">Công ty TNHH Thương Mại Và Dịch Vụ Hóa Chất H.F.T</span></i></b></p>

                                <p>Văn phòng Hà Nội: Phòng 1006, tòa nhà hỗn hợp sông Đà, 131 Trần Phú, Văn Quán, Hà Đông, Hà Nội</p>

                                <p>Tel:&nbsp;(+84) 024.3354.2250</p>

                                <p>Văn phòng HCM:&nbsp;Số 111/8/2/72 đường Trục, phường 13, quận Bình Thạnh, Hồ Chí Minh</p>

                                <p>Tel:&nbsp;</p>

                                <p>&nbsp;</p>                                    <br>
                                <a href="gioi-thieu-chung.html" class="btn btn-xt">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-b2 bg-e5 pd-40">
        <div class="container">
            <div class="wp-hoachat">
                <div class="title-sec text-center wow fadeInUp" data-wow-duration="1.6s">
                    <h3 style="color: red">Hóa Chất</h3>
                </div>
                <div class="wp-list-sp-hc">
                    <div class="wp-list-sp wow fadeInUp" data-wow-duration="1.6s">
                        <div class="product-sl owl-carousel owl-theme">
                            <div class="item">
                                <div class="wp-sp">
                                    <div class="wp-img-sp">
                                        <a href="phu-gia-san-xuat-son.html">
                                            <img src="{{ asset(config('media.client.home') . 'not-found.png') }}" alt="Phụ gia sản xuất sơn">
                                        </a>
                                    </div>
                                    <div class="text-sp">
                                        <h4 class="ten-sp"><a href="phu-gia-san-xuat-son.html">Phụ gia sản xuất sơn</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="wp-sp">
                                    <div class="wp-img-sp">
                                        <a href="carmay.html">
                                            <img src="uploads/images/san-pham/hoa-chat/carmay/cm-b/cm-b-dau-19/cm-b-19502d/a.html" alt="Carmay">
                                        </a>
                                    </div>
                                    <div class="text-sp">
                                        <h4 class="ten-sp"><a href="carmay.html">Carmay</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="wp-sp">
                                    <div class="wp-img-sp">
                                        <a href="nhu-nhom.html">
                                            <img src="uploads/images/slide/hoa-chat/nhu-nhom.jpg" alt="Nhũ Nhôm">
                                        </a>
                                    </div>
                                    <div class="text-sp">
                                        <h4 class="ten-sp"><a href="nhu-nhom.html">Nhũ Nhôm</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="wp-sp">
                                    <div class="wp-img-sp">
                                        <a href="bot-dong.html">
                                            <img src="uploads/images/slide/hoa-chat/bot-dong.jpg" alt="Bột đồng">
                                        </a>
                                    </div>
                                    <div class="text-sp">
                                        <h4 class="ten-sp"><a href="bot-dong.html">Bột đồng</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="wp-sp">
                                    <div class="wp-img-sp">
                                        <a href="bot-mau.html">
                                            <img src="uploads/images/slide/hoa-chat/bot-mau.jpg" alt="Bột màu">
                                        </a>
                                    </div>
                                    <div class="text-sp">
                                        <h4 class="ten-sp"><a href="bot-mau.html">Bột màu</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="wp-sp">
                                    <div class="wp-img-sp">
                                        <a href="mau-nhuom.html">
                                            <img src="uploads/images/slide/hoa-chat/mau-nhuom.jpg" alt="Màu nhuộm">
                                        </a>
                                    </div>
                                    <div class="text-sp">
                                        <h4 class="ten-sp"><a href="mau-nhuom.html">Màu nhuộm</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="wp-doitac-hc">
                    <div class="wp-doitac">
                        <div class="title-dt wow fadeInUp" data-wow-duration="1.6s">
                            <h3><span>Đối tác</span></h3>
                        </div>
                        <div class="wp-slider-dt wow fadeInUp" data-wow-duration="1.6s">
                            <div class="doitac-sl owl-carousel owl-theme">


                                <div class="item">
                                    <div class="wp-item-dt">
                                        <a href="javascript:void()">
                                            <img src="uploads/images/logo/dt-hoa-chat/nippon-2.jpg"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="wp-item-dt">
                                        <a href="javascript:void()">
                                            <img src="uploads/images/logo/dt-hoa-chat/son-hai-phong-1.jpg"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    doi tac--}}
    <section class="sec-b2 bg-e5 pd-40">
        <div class="container">
            <div class="wp-hoachat">
                <div class="title-sec text-center wow fadeInUp" data-wow-duration="1.6s">
                    <h3 style="color: red">Động Cơ</h3>
                </div>
                <div class="wp-list-sp-hc">
                    <div class="wp-list-sp wow fadeInUp" data-wow-duration="1.6s">
                        <div class="product-sl owl-carousel owl-theme">
                            <div class="item">
                                <div class="wp-sp">
                                    <div class="wp-img-sp">
                                        <a href="dong-co-lien-vanh-sau.html">
                                            <img src="uploads/.thumbs/images/san-pham/dong-co/dong-co-lien-vanh-sau.jpg" alt="Động cơ liền vành sau">
                                        </a>
                                    </div>
                                    <div class="text-sp">
                                        <h4 class="ten-sp"><a href="dong-co-lien-vanh-sau.html">Động cơ liền vành sau</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="wp-sp">
                                    <div class="wp-img-sp">
                                        <a href="khien-xe-dien.html">
                                            <img src="uploads/.thumbs/images/san-pham/dong-co/112-khien.jpg" alt="Khiển xe điện">
                                        </a>
                                    </div>
                                    <div class="text-sp">
                                        <h4 class="ten-sp"><a href="khien-xe-dien.html">Khiển xe điện</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="wp-sp">
                                    <div class="wp-img-sp">
                                        <a href="phanh-sau.html">
                                            <img src="uploads/.thumbs/images/san-pham/dong-co/12-sau.jpg" alt="Phanh sau">
                                        </a>
                                    </div>
                                    <div class="text-sp">
                                        <h4 class="ten-sp"><a href="phanh-sau.html">Phanh sau</a></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="wp-sp">
                                    <div class="wp-img-sp">
                                        <a href="phu-kien-khac.html">
                                            <img src="uploads/.thumbs/images/san-pham/dong-co/phu-kien.jpg" alt="Phụ kiện khác">
                                        </a>
                                    </div>
                                    <div class="text-sp">
                                        <h4 class="ten-sp"><a href="phu-kien-khac.html">Phụ kiện khác</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="wp-doitac-hc">
                    <div class="wp-doitac">
                        <div class="title-dt wow fadeInUp" data-wow-duration="1.6s">
                            <h3><span>Đối tác</span></h3>
                        </div>
                        <div class="wp-slider-dt wow fadeInUp" data-wow-duration="1.6s">
                            <div class="doitac-sl owl-carousel owl-theme">

                                <div class="item">
                                    <div class="wp-item-dt">
                                        <a href="javascript:void()">
                                            <img src="{{ asset(config('media.client.other') . 'dtp(1).png') }}"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="wp-item-dt">
                                        <a href="javascript:void()">
                                            <img src="{{ asset(config('media.client.other') . 'before-all.jpg') }}"
                                                 alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    why choose me--}}
    <section class="sec-b4 bg-e5 pd-40">
        <div class="container">
            <div class="wp-why">
                <div class="title-sec text-center wow fadeInUp" data-wow-duration="1.6s">
                    <h3>TẠI SAO CHỌN CHÚNG TÔI</h3>
                </div>
                <div class="wp-list-why">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"
                             data-wow-duration="1.6s">
                            <div class="wp-item-why bg-ff">
                                <div class="img-why">
                                    <img src="{{ asset(config('media.client.other') . 'icon-1.png') }}" alt="Đội ngũ nhân sự">
                                </div>
                                <div class="text-why">
                                    <h4><a href="doi-ngu-nhan-su.html">Đội ngũ nhân sự</a></h4>

                                    <p><p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">Đội ngũ trẻ trung, chuyên nghiệp, chuyên môn tốt, chúng tôi chắc chắn đem đến sự hài lòng cho quý khách hàng.</span></span></p>

                                    <p>&nbsp;</p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"
                             data-wow-duration="1.6s">
                            <div class="wp-item-why bg-ff">
                                <div class="img-why">
                                    <img src="{{ asset(config('media.client.other') . 'icon-2.png') }}" alt="NĂNG LỰC TÀI CHÍNH">
                                </div>
                                <div class="text-why">
                                    <h4><a href="nang-luc-tai-chinh-a136.html">NĂNG LỰC TÀI CHÍNH</a></h4>

                                    <p><p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">Năng lực đủ đáp ứng những dự án lớn, quy mô, vững chắc tạo&nbsp;sự tin tưởng cho đối tác</span></span></p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"
                             data-wow-duration="1.6s">
                            <div class="wp-item-why bg-ff">
                                <div class="img-why">
                                    <img src="{{ asset(config('media.client.other') . 'nha-cung-cap.png') }}" alt="NHÀ CUNG CẤP">
                                </div>
                                <div class="text-why">
                                    <h4><a href="nha-cung-cap-a134.html">NHÀ CUNG CẤP</a></h4>

                                    <p><p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">Là những tên tuổi lớn và uy tín đứng đầu tại nhiều quốc gia trên thế giới.</span></span></p></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInRight"
                             data-wow-duration="1.6s">
                            <div class="wp-item-why bg-ff">
                                <div class="img-why">
                                    <img src="{{ asset(config('media.client.other') . 'icon-3.png') }}" alt="LUÔN VÌ QUYỀN LỢI KHÁCH HÀNG">
                                </div>
                                <div class="text-why">
                                    <h4><a href="luon-vi-quyen-loi-khach-hang-a135.html">LUÔN VÌ QUYỀN LỢI KHÁCH HÀNG</a></h4>

                                    <p><p style="text-align: justify;"><span style="font-size:12px;"><span style="font-family:arial,helvetica,sans-serif;">Thành công của khách hàng chính là thành công của chúng tôi</span></span></p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInRight"
                             data-wow-duration="1.6s">
                            <div class="wp-item-why bg-ff">
                                <div class="img-why">
                                    <img src="{{ asset(config('media.client.other') . 'icon-5.png') }}" alt="MÔI TRƯỜNG LÀM VIỆC">
                                </div>
                                <div class="text-why">
                                    <h4><a href="moi-truong-lam-viec-a133.html">MÔI TRƯỜNG LÀM VIỆC</a></h4>

                                    <p><p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">Với môi trường làm việc trẻ trung, năng động,&nbsp;chuyên nghiệp, chúng tôi sẽ không làm bạn thất vọng.</span></span></p></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInRight"
                             data-wow-duration="1.6s">
                            <div class="wp-item-why bg-ff">
                                <div class="img-why">
                                    <img src="{{ asset(config('media.client.other') . 'icon-6.png') }}" alt="SẢN PHẨM">
                                </div>
                                <div class="text-why">
                                    <h4><a href="san-pham-a132.html">SẢN PHẨM</a></h4>

                                    <p><p style="text-align: justify;"><span style="font-size:14px;"><span style="font-family:arial,helvetica,sans-serif;">Sản phẩm đến từ các&nbsp;thương hiệu lớn ở nhiều quốc gia;&nbsp;chất lượng,&nbsp;giá cả luôn cạnh tranh</span></span></p></p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec-b5 bg-ff pd-40">
        <div class="container">
            <div class="wp-tintuc">
                <div class="title-sec text-center wow fadeInUp" data-wow-duration="1.6s">
                    <h3>Tin tức</h3>
                </div>
                <div class="wp-ttsk">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft"
                             data-wow-duration="1.6s">
                            <div class="wp-item-ttsk">
                                <div class="img-ttsk">
                                    <a href="ho-tro-khach-hang.html"><img src="templates/not-found.png"
                                                                          alt="ho tro khach hang"
                                                                          style="height: 244px"></a>
                                </div>
                                <div class="text-ttsk bg-ke">
                                    <h4><a href="ho-tro-khach-hang.html">ho tro khach hang</a></h4>

                                    <p><p>ewwe</p></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="1.6s">
                            <div class="wp-ttsk-khac bg-ke">
                                <h4 class="tt-khac">Tin tức khác</h4>

                                <div class="wp-list-ttkhac">
                                </div>
                                <div class="xemthem-ttkhac">
                                    <span class="xt-ttk">Xem thêm thông tin khác</span>
                                    <span><a href="tin-tuc.html" class="btn btn-ttkhac"><i
                                                class="fa fa-angle-right"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <!-- js slider main -->
    <script type="text/javascript">
        $('#slider-home').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>

    <!-- js slider đối tác -->
    <script type="text/javascript">
        $('.doitac-sl').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 6
                }
            }
        })
    </script>
    <script type="text/javascript">
        $('.product-sl').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots:false,
            autoplay: true,
            autoplayTimeout: 5000,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>


    <!-- js slider ý kiến khách hàng -->
    <script type="text/javascript">
        $('.ykkh-sl').owlCarousel({
            loop:false,
            margin:5,
            nav:true,
            autoplay:true,
            autoplayTimeout: 5000,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    </script>
    <!-- js slider chi tiết sản phẩm -->
    <script type="text/javascript">
        $('#img-zoom').owlCarousel({
            loop: false,
            margin: 5,
            nav:true,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })
    </script>
    <!-- js slider sp đã xem -->
    <script type="text/javascript">
        $('#sl-spdaxem').owlCarousel({
            loop: false,
            margin: 20,
            nav:true,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>
    <!-- js slider sp khac -->
    <script type="text/javascript">
        $('#sl-spkhac').owlCarousel({
            loop: false,
            margin: 20,
            nav:true,
            responsive:{
                0:{
                    items:2
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
        })
    </script>
    <!-- js show search mobile -->
    <script>
        $("#click-search-mb").click(function () {
            $(".fr-search-mb").slideToggle("fast", function () {
            });
        });
    </script>
@endsection
