@inject('helper', 'App\Helper\Helper')
@extends('layouts.master')

@section('slider')
    <header class="slider slider-prlx fixed-slider text-center">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ asset('uploaded/'.$slider->slider_image) }}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        <h1 data-splitting>{!! $slider->slider_title !!}</h1>
                                        <p>{{ $slider->slider_text }}</p>
                                        <a href="{{ $slider->slider_url }}" class="btn-curve btn-lit mt-30">
                                            <span>Look More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- slider setting -->
            <div class="setone setwo">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <div class="swiper-pagination top botm custom-font"></div>

            <div class="social-icon">
                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                <a href="#0"><i class="fab fa-twitter"></i></a>
                <a href="#0"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </header>
@endsection

@section('about')
    <div class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="img-mons">
                        <div class="row">
                            <div class="col-md-5 cmd-padding valign">
                                <div class="img1 wow imago" data-wow-delay=".5s">
                                    <img src="img/intro/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-md-7 cmd-padding">
                                <div class="img2 wow imago" data-wow-delay=".3s">
                                    <img src="img/intro/3.jpg" alt="">
                                </div>
                                <div class="img3 wow imago" data-wow-delay=".8s">
                                    <img src="img/intro/2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1 valign">
                    <div class="content">
                        <div class="sub-title">
                            <h6>About Us</h6>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <h3 class="main-title wow" data-splitting>We are more than just <br> a digital agency.</h3>
                        <p class="wow txt" data-splitting>We are AVO. We create award-winning websites, remarkable
                            brands and cutting-edge
                            apps.Nullam
                            imperdiet, sem at fringilla lobortis, sem nibh fringilla nibh, id gravida mi purus sit
                            amet
                            erat. Ut dictum nisi masvitp</p>
                        <div class="ftbox mt-30">
                            <ul>
                                <li class="wow fadeIn" data-wow-delay=".3s">
                                    <span class="icon pe-7s-gleam"></span>
                                    <h6 class="custom-font">Pixel <br> Perfect</h6>
                                    <div class="dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </li>
                                <li class="space wow fadeIn" data-wow-delay=".5s">
                                    <span class="icon pe-7s-paint-bucket"></span>
                                    <h6 class="custom-font">Creative <br> Design</h6>
                                    <div class="dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </li>
                                <li class="wow fadeIn" data-wow-delay=".8s">
                                    <span class="icon pe-7s-medal"></span>
                                    <h6 class="custom-font">Heigh <br> Perfomance</h6>
                                    <div class="dots">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('services')
    <section class="services">
        <div class="container">
            <div class="sec-head custom-font text-center">
                <h6 class="wow fadeIn" data-wow-delay=".5s">Best Features</h6>
                <h3 class="wow" data-splitting>Services.</h3>
                <span class="tbg">Services</span>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 item-box bg-img wow fadeInLeft" data-wow-delay=".3s"
                     data-background="img/1.jpg">
                    <h4 class="custom-font">Best Of <br> Our Features</h4>
                    <a href="about.html" class="btn-curve btn-bord btn-lit mt-40"><span>See All Services</span></a>
                </div>
                <div class="col-lg-3 col-md-6 item-box wow fadeInLeft" data-wow-delay=".5s">
                    <span class="icon pe-7s-paint-bucket"></span>
                    <h6>Graphic Design</h6>
                    <p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p>
                </div>
                <div class="col-lg-3 col-md-6 item-box wow fadeInLeft" data-wow-delay=".7s">
                    <span class="icon pe-7s-phone"></span>
                    <h6>Web & <br> Mobile Design</h6>
                    <p>Tempore corrupti temporibus fuga earum asperiores fugit.</p>
                </div>
                <div class="col-lg-3 col-md-6 item-box wow fadeInLeft" data-wow-delay=".9s">
                    <span class="icon pe-7s-display1"></span>
                    <h6>Social <br> media Marketing</h6>
                    <p>Tempore corrupti temporibus fuga earum asperiores fugit.</p>
                </div>
            </div>
        </div>
        <div class="half-bg bottom"></div>
    </section>
@endsection

@section('number-sec')
    <section class="number-sec section-padding sub-bg">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </section>
@endsection

@section('work-carousel')
    <section class="work-carousel section-padding pt-0 metro position-re">
        <div class="container ontop">
            <div class="row">
                <div class="col-lg-12 no-padding">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            @foreach($portfolios as $portfolio)
                            <div class="swiper-slide">
                                <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago" data-background="{{ asset('uploaded/thumbnail/'.$portfolio->image) }}">
                                    </div>
                                    <div class="cont">
                                        <h6><a href="#0">art & illustration</a></h6>
                                        <h4><a href="project-details.html">{{ $portfolio->name }}</a></h4>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- slider setting -->
                        <div class="swiper-button-next swiper-nav-ctrl simp-next cursor-pointer">
                            <span class="simple-btn right">Next</span>
                        </div>
                        <div class="swiper-button-prev swiper-nav-ctrl simp-prev cursor-pointer">
                            <span class="simple-btn">Prev</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="half-bg top"></div>
    </section>
@endsection

@section('block-sec')
    <section class="block-sec">
        <div class="background bg-img section-padding pb-0" data-background="img/slid/1.jpg" data-overlay-dark="8">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="vid-area">
                            <div class="vid-icon">
                                <a class="vid" href="https://vimeo.com/127203262">
                                    <div class="vid-butn">
                                            <span class="icon">
                                                <i class="fas fa-play"></i>
                                            </span>
                                    </div>
                                </a>
                            </div>

                            <div class="cont">
                                <h3 class="wow" data-splitting>So that's us. There's no other way to put it.</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="testim-box">
                            <div class="head-box">
                                <h6 class="wow fadeIn" data-wow-delay=".5s">Our Happy Clients</h6>
                                <h4 class="wow fadeInLeft" data-wow-delay=".5s">What Client's Say?</h4>
                            </div>
                            <div class="slic-item wow fadeInUp" data-wow-delay=".5s">
                                <div class="item">
                                    <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh volutpat velit
                                        class
                                        aptent taciti sociosqu ad litora.</p>
                                    <div class="info">
                                        <div class="img">
                                            <div class="img-box">
                                                <img src="img/clients/1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="cont">
                                            <div class="author">
                                                <h6 class="author-name custom-font">Alex Regelman</h6>
                                                <span class="author-details">Co-founder, Colabrio</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh volutpat velit
                                        class
                                        aptent taciti sociosqu ad litora.</p>
                                    <div class="info">
                                        <div class="img">
                                            <div class="img-box">
                                                <img src="img/clients/2.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="cont">
                                            <div class="author">
                                                <h6 class="author-name custom-font">Alex Regelman</h6>
                                                <span class="author-details">Co-founder, Colabrio</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh volutpat velit
                                        class
                                        aptent taciti sociosqu ad litora.</p>
                                    <div class="info">
                                        <div class="img">
                                            <div class="img-box">
                                                <img src="img/clients/3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="cont">
                                            <div class="author">
                                                <h6 class="author-name custom-font">Alex Regelman</h6>
                                                <span class="author-details">Co-founder, Colabrio</span>
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
    </section>
@endsection

@section('skills-circle')
    <section class="skills-circle sub-bg pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item wow fadeInLeft" data-wow-delay=".6">
                                    <div class="skill" data-value="0.9">
                                        <span class="custom-font">90%</span>
                                    </div>
                                    <div class="cont">
                                        <span>Project</span>
                                        <h6>Consulting</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item wow fadeInLeft" data-wow-delay=".3">
                                    <div class="skill" data-value="0.75">
                                        <span class="custom-font">75%</span>
                                    </div>
                                    <div class="cont">
                                        <span>App</span>
                                        <h6>Development</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('clients')
    <section class="clients section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 valign">
                    <div class="sec-head custom-font mb-0">
                        <h6>Clients</h6>
                        <h3>Our <br> Clients.</h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div>
                        <div class="row bord">
                            <div class="col-md-3 col-6 brands">
                                <div class="item wow fadeIn" data-wow-delay=".3s">
                                    <div class="img">
                                        <img src="img/clients/brands/01.png" alt="">
                                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 brands">
                                <div class="item wow fadeIn" data-wow-delay=".6s">
                                    <div class="img">
                                        <img src="img/clients/brands/02.png" alt="">
                                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 brands">
                                <div class="item wow fadeIn" data-wow-delay=".8s">
                                    <div class="img">
                                        <img src="img/clients/brands/03.png" alt="">
                                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 brands">
                                <div class="item wow fadeIn" data-wow-delay=".3s">
                                    <div class="img">
                                        <img src="img/clients/brands/04.png" alt="">
                                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-6 brands">
                                <div class="item wow fadeIn" data-wow-delay=".4s">
                                    <div class="img">
                                        <img src="img/clients/brands/05.png" alt="">
                                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 brands">
                                <div class="item wow fadeIn" data-wow-delay=".7s">
                                    <div class="img">
                                        <img src="img/clients/brands/06.png" alt="">
                                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 brands">
                                <div class="item wow fadeIn" data-wow-delay=".5s">
                                    <div class="img">
                                        <img src="img/clients/brands/07.png" alt="">
                                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 brands">
                                <div class="item wow fadeIn" data-wow-delay=".3s">
                                    <div class="img">
                                        <img src="img/clients/brands/08.png" alt="">
                                        <a href="#0" class="link" data-splitting>www.avo.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('blog-curs')
    <section class="blog-curs section-padding sub-bg">
        <div class="container">
            <div class="sec-head custom-font text-center">
                <h6 class="wow fadeIn" data-wow-delay=".5s">Latest News</h6>
                <h3 class="wow" data-splitting>Our Blogs.</h3>
                <span class="tbg">Blogs</span>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blg-swipe wow fadeInUp" data-wow-delay=".5s">
                        @foreach($articles as $article)
                            <div class="item-box">
                                <div class="item">
                                    <div class="bimg">
                                        <div class="img bg-img" data-background="{{ asset('uploaded/thumbnail/'.$article->article_image) }}"></div>
                                    </div>
                                    <div class="cont valign">
                                        <div class="full-width">
                                            <div class="info custom-font">
                                                <a href="#0" class="author">
                                                    <span>by / Admin</span>
                                                </a>
                                                <a href="#0" class="date">
                                                    {{--<span><i>06</i> Aug <i>2020</i></span>--}}
                                                    {!! \App\Helper\Helper::formatDate($article->created_at) !!}
                                                </a>
                                            </div>
                                            <h6 class="custom-font">
                                                <a href="#0">{{ $article->article_title }}</a>
                                            </h6>
                                            <div class="btn-more custom-font">
                                                <a href="#0" class="simple-btn">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('call-to-action')
    <section class="call-action section-padding sub-bg bg-img" data-background="img/pattern.png">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-9">
                    <div class="content sm-mb30">
                        <h6 class="wow" data-splitting>Let’s Talk</h6>
                        <h2 class="wow custom-font" data-splitting>about your <b>next project</b>.</h2>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 valign">
                    <a href="contact.html" class="btn-curve btn-lit wow fadeInUp" data-wow-delay=".5s"><span>Get In
                                Touch</span></a>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('footer-half')
    <footer class="footer-half sub-bg section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="cont">
                        <div class="logo">
                            <a href="#0">
                                <img src="img/logo-light.png" alt="">
                            </a>
                        </div>
                        <div class="con-info custom-font">
                            <ul>
                                <li><span>Email : </span> Avo_support@website.com</li>
                                <li><span>Address : </span> A32 , Ave 15th Street, Door 211, San Franciso, USA
                                    32490.
                                </li>
                                <li><span>Phone : </span> (+1) 2345 678 44 88</li>
                            </ul>
                        </div>
                        <div class="social-icon">
                            <h6 class="custom-font stit simple-btn">Follow Us</h6>
                            <div class="social">
                                <a href="#0" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-pinterest"></i>
                                </a>
                                <a href="#0" class="icon">
                                    <i class="fab fa-behance"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2">
                    <div class="subscribe mb-50">
                        <h6 class="custom-font stit simple-btn">Newslatter</h6>
                        <p>Sign up for subscribe out newsletter!</p>
                        <form>
                            <div class="form-group custom-font">
                                <input type="email" name="subscribe" placeholder="Your Email">
                                <button class="cursor-pointer">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="insta">
                        <h6 class="custom-font stit simple-btn">Instagram Post</h6>
                        <div class="insta-gallary">
                            <a href="#0">
                                <img src="img/insta/1.jpg" alt="">
                            </a>
                            <a href="#0">
                                <img src="img/insta/2.jpg" alt="">
                            </a>
                            <a href="#0">
                                <img src="img/insta/3.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyrights text-center">
                <p>© 2020, Avo Template. Made with passion by <a href="#0">UI-ThemeZ</a>.</p>
            </div>
        </div>
    </footer>
@endsection

