@extends('layouts.master')

@section('header')
    <header class="works-header fixed-slider hfixd valign">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-md-11 static">
                    <div class="capt text-center mt-50">
                        <h4 class="parlx">Creativity involves breaking out of expected & repeatable patterns
                            in order to look at things in different way than ever before.</h4>

                        <div class="bactxt custom-font valign">
                            <span class="full-width">Works</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('work-carousel')
    <section class="works section-padding pb-70">
        <div class="container">
            <div class="row lg-space">
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="project-details2.html">
                            <div class="img" data-tooltip-tit="Work image" data-tooltip-sub="Design">
                                <img src="{{ asset('img/portfolio/works/1.jpg') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 valign">
                    <div class="item">
                        <a href="project-details2.html">
                            <div class="img" data-tooltip-tit="Work image" data-tooltip-sub="Branding">
                                <img src="{{ asset('img/portfolio/works/2.jpg') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="project-details2.html">
                            <div class="img" data-tooltip-tit="Work image" data-tooltip-sub="Photography">
                                <img src="{{ asset('img/portfolio/works/3.jpg') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 valign">
                    <div class="item">
                        <a href="project-details2.html">
                            <div class="img" data-tooltip-tit="Work image" data-tooltip-sub="Design">
                                <img src="{{ asset('img/portfolio/works/6.jpg') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="project-details2.html">
                            <div class="img" data-tooltip-tit="Work image" data-tooltip-sub="Web Design">
                                <img src="{{ asset('img/portfolio/works/5.jpg') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 valign">
                    <div class="item">
                        <a href="project-details2.html">
                            <div class="img" data-tooltip-tit="Work image" data-tooltip-sub="Photography">
                                <img src="{{ asset('img/portfolio/works/4.jpg') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="project-details2.html">
                            <div class="img" data-tooltip-tit="Work image" data-tooltip-sub="Creative">
                                <img src="{{ asset('img/portfolio/works/7.jpg') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 valign">
                    <div class="item">
                        <a href="project-details2.html">
                            <div class="img" data-tooltip-tit="Work image" data-tooltip-sub="Branding">
                                <img src="{{ asset('img/portfolio/works/8.jpg') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="item">
                        <a href="project-details2.html">
                            <div class="img" data-tooltip-tit="Work image" data-tooltip-sub="Design">
                                <img src="{{ asset('img/portfolio/works/9.jpg') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer-half')
    <footer class="footer-half sub-bg">
        <div class="container">
            <div class="copyrights text-center mt-0">
                <p>© 2020, Avo Template. Made with passion by <a href="#0">UI-ThemeZ</a>.</p>
            </div>
        </div>
    </footer>
@endsection
