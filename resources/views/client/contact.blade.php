@extends('client.layout.main')

@section('title')
    Liên hệ
@endsection

@section('content')
    <div class="clearfix-20"></div>
    <div id="contact-page" class="page-body" style="margin:40px 0">
        <section class="page-contact mt30">
            <div class="container">

                <section>
                    <div class="uk-grid uk-grid-medium">

                        <div class="col-md-8" style="padding-left: 0px;">
                            <div class="contact-infomation">
                                <h1>Liên hệ</h1>
                                <i>Cám ơn quý khách đã ghé thăm website chúng tôi.</i>
                                <h2 class="company">CÔNG TY TNHH TM & DV HÓA CHẤT H.F.T </h2>
                                <div class="address">
                                    <p>Địa chỉ: Phòng 1006, tòa nhà hỗn hợp sông Đà, 131 Trần Phú, Hà Đông, Hà Nội<br></p>
                                    <p>Điện thoại: 01237281293<br></p>
                                    <p>Email: hftchemical@gmail.com<br></p>
                                    <p>Website: http://demo.vn</p>
                                </div>
                                <div class="clearfix-10"></div>
                                <div class="contact-map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.4323048971337!2d105.77921081455008!3d20.975301186027284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134532ccede23e5%3A0xc1ca7ec9fa249450!2zMTMxIFRy4bqnbiBQaMO6LCBWxINuIFF1w6FuLCBIw6AgxJDDtG5nLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1527211358437" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>								<style>.contact-map iframe {width: 100%;height: 100%; min-height: 300px;}</style>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4" style="padding: 0px">
                            <div class="contact-form">
                                <i>Mời bạn điền vào mẫu thư liên lạc và gửi đi cho chúng tôi. Các chuyên viên tư vấn của chúng tôi sẽ trả lời bạn trong thời gian sớm nhất.</i>
                                <div class="clearfix-10"></div>
                                <form action="#" method="post" class="uk-form form">
                                    <div class="uk-grid lib-grid-20 uk-grid-width-small-1-2 uk-grid-width-large-1-1">
                                        <div class="form-row mb15">
                                            <input type="text" name="fullname" value="" class="uk-width-1-1 input-text" placeholder="Họ và tên *" />
                                        </div>
                                        <div class="form-row mb15">
                                            <input type="text" name="email" value="" class="uk-width-1-1 input-text" placeholder="Email *" />
                                        </div>
                                        <div class="form-row mb15">
                                            <input type="text" name="phone" value="" class="uk-width-1-1 input-text" placeholder="Số điện thoại *" />
                                        </div>
                                        <div class="form-row mb15">
                                            <input type="text" name="address" value="" class="uk-width-1-1 input-text" placeholder="Địa chỉ *" />
                                        </div>
                                    </div><!-- end .uk-grid -->
                                    <div class="form-row mb15">
                                        <textarea name="message" value="" class="uk-width-1-1 form-textarea" style="height: 175px;" placeholder="Nội dung *"></textarea>
                                    </div>
                                    <div class="form-row uk-text-right">
                                        <input type="submit" name="create" class="btn-submit btn btn-primary" value="Gửi thông tin" />
                                    </div>
                                </form><!-- end .form -->
                            </div><!-- end .contacts -->
                        </div>
                    </div>
                </section>
            </div>
        </section>
    </div>
    <div class="clearfix-20"></div>
@endsection

@section('style')
    <style>
        #contact-page {
            font-family: 'Quicksand', sans-serif;
        }
        .address p {
            font-size: 17px;
            margin-bottom: 15px;
        }
        h2.company {
            padding: 10px 0;
            color: #901914;
            margin: 0px;
            line-height: 30px;
            text-align: center;
            margin-bottom: 15px;
        }
        .contact-infomation i{
            font-size: 18px;
            margin-bottom: 15px;
            display: block;
            text-align: center;
        }
        .uk-form input:not([type]), .uk-form input[type=text], .uk-form input[type=password], .uk-form input[type=email], .uk-form input[type=url], .uk-form input[type=search], .uk-form input[type=tel], .uk-form input[type=number], .uk-form input[type=datetime], .uk-form input[type=datetime-local], .uk-form input[type=date], .uk-form input[type=month], .uk-form input[type=time], .uk-form input[type=week], .uk-form input[type=color], .uk-form select, .uk-form textarea {
            height: 32px;
            padding: 0px 10px;
            line-height: 32px;
            max-width: 100%;
            border: 1px solid #d5d5d5;
            background: #fff;
            color: #333;
            outline: none;
            margin-bottom: 5px;
            width: 100%;
            font-size: 14px;
            line-height: 20px;
            -webkit-transition: all .2s linear;
            -webkit-transition-property: border, background, color, box-shadow, padding;
            transition: all .2s linear;
            transition-property: border, background, color, box-shadow, padding;
        }
        .mb15 {
            margin-bottom: 15px;
        }
        .contact-form input.input-text, .contact-form .form-textarea {
            background: #fafafa;
            border-radius: 3px;
        }
        .uk-grid-width-large-1-1>* {
            width: 100%;
        }
        .contact-form i {
            margin-bottom: 20px;
            display: block;
        }
        .contact-infomation h1 {
            text-align: center;
            margin-bottom: 30px;
        }
    </style><!--end-->
@endsection
