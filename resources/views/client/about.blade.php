@extends('client.layout.main')

@section('title')

@endsection

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7"
         style="background-image: url({{ asset('/client/img/slides/5.jpg') }}); background-position: bottom;"
    >
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-9 font-weight-bold mt-4">{{ __('home.header.about') }}</h1>
                    <span class="sub-title mt-4">{{ __('home.company.name') }}</span>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">{{ __('home.header.home') }}</a></li>
                        <li class="active">{{ __('home.header.about') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row pt-5">
            <div class="col">
                <div class="row text-center pb-5">
                    <div class="col-md-10 mx-md-auto">
                        <div class="overflow-hidden mb-3">
                            <h1 class="word-rotator slide font-weight-bold text-8 mb-0 appear-animation" data-appear-animation="maskUp">
                                <p>{{ __('home.company.name') }} </p>
                                <span>{{ __('home.company.we') }}</span>
                                <span class="word-rotator-words bg-primary">
                                    <b class="is-visible">{{ __('home.company.create') }}</b>
                                    <b>{{ __('home.company.develop') }}</b>
                                    <b>{{ __('home.company.build') }}</b>
                                </span>
                                <span> {{ __('home.company.solutions') }}</span>
                            </h1>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="lead mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
                                {{ __('home.company.vision') }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row mt-3 mb-5">
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="800">
                        <h3 class="font-weight-bold text-4 mb-2">{{ __('home.company.our_mission') }}</h3>
                        <p>{{ __('home.company.our_mission_detail') }}</p>
                    </div>
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                        <h3 class="font-weight-bold text-4 mb-2">{{ __('home.company.our_vision') }}</h3>
                        <p>{{ __('home.company.our_mission_detail') }}.</p>
                    </div>
                    <div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
                        <h3 class="font-weight-bold text-4 mb-2">{{ __('home.company.why_us') }}</h3>
                        <p>{{ __('home.company.why_us_detail') }}</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <section class="section section-height-3 bg-color-grey-scale-1 m-0 border-0">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12 pb-sm-4 pb-lg-0 pr-lg-5 mb-sm-5 mb-lg-0 about-us-page">
                    <h3 class="text-center">Về chúng tôi</h3>
                    <p>
                        Công ty TNHH Thương Mại Và Dịch Vụ Hóa Chất H.F.T được thành lập vào ngày 15/01/2008. Trải qua hơn 10 năm hoạt động,
                        phát triển trong lĩnh vực hóa chất và sản xuất, lắp ráp động cơ xe đạp điện, xe máy điện,
                        H.F.T đã vạch ra cho mình hướng đi đồng điệu với nhu cầu phát triển của hầu hết các Quốc
                        gia trên thế giới. Hiện nay Chính phủ luôn khuyến khích và tạo điều kiện để các doanh
                        nghiệp phát triển những sản phẩm mang tính thân thiện với thiên nhiên, bảo vệ môi trường
                        sống cho thế hệ sau này. Chính vì vậy mà những sản phẩm chạy bằng năng lượng điện ngày
                        càng được ưa chuộng và sử dụng phổ thông hơn với mục tiêu trong tương lai có thể thay
                        thế dần các loại động cơ chạy bằng xăng, dầu,.. H.F.T  tự hào là một trong những đơn
                        vị sản xuất động cơ xe máy điện, xe đạp điện tốt nhất trên thị trường hiện nay, góp
                        phần bảo vệ môi trường sống cho thế hệ con em trong tương lai cũng như sát cánh cùng
                        những doanh nghiệp sản xuất xe điện phát triển bền vững và lớn mạnh không ngừng.
                        Động cơ H.F.T gắn liền với một số thương hiệu xe điện nổi tiếng như BEFORE ALL, DƯƠNG TIẾN PHÁT, OSAKAR, VINA THÁi, MICHI BIKE,.....
                    </p>
                    <p>
                        Trong lĩnh vực hóa chất, H.F.T chuyên cung cấp các loại phụ gia cho ngành sản xuất sơn như: Sơn sàn,
                        sơn tàu biển, sơn ô tô, sơn trên kính,... và phục vụ cho một số ngành như sản xuất mực in, da giày,
                        cao su,… Sản phẩm của H.F.T là những sản phẩm đã có mặt trên thị trường nhiều năm và được tuyển chọn
                        từ những nhà cung cấp lớn. Có thể nhắc tới một số thương hiệu nổi tiếng như: Taiga Additives, 3D Bio-Chem,
                        Color Valley Technology, Titanos, Zuxing, Kecai Pigments…Sản phẩm hóa chất của H.F.T đã nhận được sự tin
                        tưởng và gắn bó của những doanh nghiệp lớn tại Việt Nam như: Công ty TNHH Nippon Paint Việt Nam, Công
                        ty Cổ phần sơn Hải Phòng, Công ty TNHH sản xuất sơn Phoenix (Việt Nam), Công ty TNHH Công Nghiệp
                        Brilliant, Công ty TNHH Daigaku (Việt Nam), Công ty TNHH Thương mại Dịch vụ Sản xuất Hải Thành Công ...
                    </p>
                    <p>
                        <strong>H.F.T  luôn luôn cam kết mang tới cho khách hàng sự yên tâm về chất lượng, hợp lý về giá cả và hài lòng
                            về cung cách làm việc cũng như thái độ phục vụ. </strong>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="container appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
        <div class="row pt-5 pb-4 my-5">
            <div class="col-md-6 order-2 order-md-1 text-center text-md-left">
                <div class="owl-carousel owl-theme nav-style-1 nav-center-images-only stage-margin mb-0" data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 2}}, 'margin': 25, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-1.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">John Doe</h3>
                        <p class="text-2 mb-0">CEO</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-2.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Jessica Doe</h3>
                        <p class="text-2 mb-0">CEO</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-3.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Chris Doe</h3>
                        <p class="text-2 mb-0">DEVELOPER</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-4.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Julie Doe</h3>
                        <p class="text-2 mb-0">SEO ANALYST</p>
                    </div>
                    <div>
                        <img class="img-fluid rounded-0 mb-4" src="img/team/team-5.jpg" alt="" />
                        <h3 class="font-weight-bold text-color-dark text-4 mb-0">Robert Doe</h3>
                        <p class="text-2 mb-0">DESIGNER</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 order-1 order-md-2 text-center text-md-left mb-5 mb-md-0">
                <h2 class="text-color-dark font-weight-normal text-6 mb-2 pb-1">Meet <strong class="font-weight-extra-bold">Our Team</strong></h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit massa enim. Nullam id varius nunc.</p>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc. Vivamus bibendum magna ex, et faucibus lacus venenatis eget.</p>
            </div>
        </div>
    </div>
@endsection
