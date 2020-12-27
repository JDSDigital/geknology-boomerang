<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<!-- Slider -->
<section class="swiper-js-container background-image-holder" data-holder-type="fullscreen" data-holder-offset=".navbar">
    <div class="swiper-container" data-swiper-autoplay="true" data-swiper-effect="fade" data-swiper-items="1" data-swiper-space-between="0">
        <div class="swiper-wrapper">
            <!-- Slide -->
            <div class="swiper-slide" data-swiper-autoplay="8000">
                <div class="slice holder-item holder-item-light has-bg-cover bg-size-cover" style="background-image: url(./images/backgrounds/slider/img-14.jpg); background-position: center bottom;">
                    <span class="mask bg-dark alpha-7"></span>
                    <div class="container d-flex align-items-center no-padding">
                        <div class="col">
                            <div class="row row-cols-xs-spaced align-items-center py-4 text-center">
                                <div class="col-12">
                                    <h2 class="heading display-3 strong-600 c-white animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                                        Discover Europe
                                    </h1>
                                    <a href="#" class="btn btn-styled btn-white btn-circle mt-3 animated" data-animation-in="fadeIn" data-animation-delay="1200" data-scroll-to="#scrollToSection">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide -->
            <div class="swiper-slide" data-swiper-autoplay="8000">
                <div class="slice holder-item holder-item-light has-bg-cover bg-size-cover" style="background-image: url(./images/backgrounds/slider/img-30.jpg); background-position: bottom center;">
                    <span class="mask mask-dark--style-2"></span>
                    <div class="container d-flex align-items-center no-padding">
                        <div class="col">
                            <div class="row row-cols-xs-spaced align-items-center py-5 text-center">
                                <div class="col-12">
                                    <h2 class="heading heading-xl strong-700 c-white text-uppercase animated" data-animation-in="fadeInDownBig" data-animation-delay="200">
                                        See the world
                                    </h1>
                                    <a href="#" class="btn btn-styled btn-sm btn-white btn-circle mt-4 animated" data-animation-in="fadeIn" data-animation-delay="1200" data-scroll-to="#scrollToSection">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Arrows -->
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-button swiper-button-prev"></div>
    </div>
</section>
<!-- / Slider -->

<section class="sct-color-1" id="scrollToSection">
    <div class="container container-over-top">
        <div class="section-title section-title-inverse section-title--style-1 text-center mb-5">
            <h3 class="section-title-inner heading-sm strong-600 text-uppercase">
                <span>Featured trips</span>
            </h3>
            <span class="section-title-delimiter clearfix d-none"></span>
        </div>

        <span class="clearfix"></span>

        <div class="row justify-content-sm-center row-sm-padding cols-xs-space cols-sm-space cols-md-space">
            <div class="col-lg-3 col-md-6">
                <div class="block block-image-holder animate-this animate--hover-zoom animate--hover-show-btn">
                    <div class="block-image">
                        <a href="#">
                            <img src="./images/prv/travel/img-promo-1.jpg">
                        </a>
                    </div>
                    <div class="block-info block-info-over block-info-over--style-1 block-info-over--dark-gradient overflow-visible">
                        <div class="block-info-inner animate-translate--up">
                            <div class="text-center">
                                <a href="#" class="heading heading-4 strong-500 mb-0 c-white">Soporte PC</a>
                                <span class="clearfix"></span>
                                <small class="text-uppercase c-white">Graphics</small>
                            </div>
                        </div>
                    </div>

                    <div class="animate--hover-button">
                        <a href="#" class="btn btn-styled btn-sm btn-base-2 btn-circle">See offers</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="block block-image-holder animate-this animate--hover-zoom animate--hover-show-btn">
                    <div class="block-image">
                        <a href="#">
                            <img src="./images/prv/travel/img-promo-2.jpg">
                        </a>
                    </div>
                    <div class="block-info block-info-over block-info-over--style-1 block-info-over--dark-gradient overflow-visible">
                        <div class="block-info-inner animate-translate--up">
                            <div class="text-center">
                                <a href="#" class="heading heading-4 strong-500 mb-0 c-white">Soporte MAC</a>
                                <span class="clearfix"></span>
                                <small class="text-uppercase c-white">Graphics</small>
                            </div>
                        </div>
                    </div>

                    <div class="animate--hover-button">
                        <a href="#" class="btn btn-styled btn-sm btn-base-2 btn-circle">See offers</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="block block-image-holder animate-this animate--hover-zoom animate--hover-show-btn">
                    <div class="block-image">
                        <a href="#">
                            <img src="./images/prv/travel/img-promo-3.jpg">
                        </a>
                    </div>
                    <div class="block-info block-info-over block-info-over--style-1 block-info-over--dark-gradient overflow-visible">
                        <div class="block-info-inner animate-translate--up">
                            <div class="text-center">
                                <a href="#" class="heading heading-4 strong-500 mb-0 c-white">Desarrollo Web</a>
                                <span class="clearfix"></span>
                                <small class="text-uppercase c-white">Graphics</small>
                            </div>
                        </div>
                    </div>

                    <div class="animate--hover-button">
                        <a href="#" class="btn btn-styled btn-sm btn-base-2 btn-circle">See offers</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Nuestros Clientes -->
<section class="slice pb-0 sct-color-1 mb-5">
    <div class="container">
        <div class="text-center">
            <h3 class="heading heading-3 strong-500">
                Trusted by over 6000+ clients
            </h3>
            <div class="fluid-paragraph mt-1">
                Start building fast, beautiful and modern looking websites in no time using our theme.
            </div>
        </div>

        <div class="swiper-js-container mt-5">
            <div class="swiper-container" data-swiper-items="6" data-swiper-space-between="25" data-swiper-md-items="4" data-swiper-md-space-between="25" data-swiper-sm-items="3" data-swiper-sm-space-between="20" data-swiper-xs-items="2" data-swiper-sm-space-between="20">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="client-logo client-logo--style-4">
                            <div class="view view-first">
                                <a href="#">
                                    <img src="./images/prv/clients/client-1.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="client-logo client-logo--style-4">
                            <div class="view view-first">
                                <a href="#">
                                    <img src="./images/prv/clients/client-2.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="client-logo client-logo--style-4">
                            <div class="view view-first">
                                <a href="#">
                                    <img src="./images/prv/clients/client-3.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="client-logo client-logo--style-4">
                            <div class="view view-first">
                                <a href="#">
                                    <img src="./images/prv/clients/client-4.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="client-logo client-logo--style-4">
                            <div class="view view-first">
                                <a href="#">
                                    <img src="./images/prv/clients/client-5.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="client-logo client-logo--style-4">
                            <div class="view view-first">
                                <a href="#">
                                    <img src="./images/prv/clients/client-6.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="client-logo client-logo--style-4">
                            <div class="view view-first">
                                <a href="#">
                                    <img src="./images/prv/clients/client-7.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Nuestros Clientes -->

<!-- Comentarios -->
<!-- / Comentarios -->
