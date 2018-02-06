@extends('front.layouts.main')

{{-- The Page Title --}}
    @section('title')
        Homepage
    @stop

{{-- This is used for custom JS css at Header --}}
    @section('pagestyle')
    @stop

{{-- This is the main content area --}}
    @section('content')

<div class="main-slider-section">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url({{ asset('/images/banner1.jpg') }} )">
                    <div class="container">
                        <div class="slide-txt">
                            <div class="txt1">
                                DON’T
                            </div>
                            <div class="txt2">
                                DELIVER
                            </div>
                            <div class="txt3">
                                IT YOURSELF,
                            </div>
                            <h2><span>sendeddy</span> instead.</h2>
                        </div>
                    </div>                  
                </div>
                <div class="swiper-slide" style="background-image:url({{ asset('/images/1.jpg') }} )"></div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next swiper-button-white"></div>
            <div class="swiper-button-prev swiper-button-white"></div>
        </div>

        
        <div class="get-estimate-box animatedParent animateOnce">
            <div class="container">
                <div class="inner-box animated fadeInRight">
                    <div class="become-transport">
                        <div class="title-box-1">
                            <img src="images/icon-transport.png" alt="">
                            <div class="title-box">Become a<br>transporter<br><h3>sign up</h3></div>
                        </div>
                    </div>
                    <div class="divider"><span>or</span></div>
                    <div class="become-transport">
                        <div class="title-box-1">
                            <img src="images/icon-parcel.png" alt="">
                            <div class="title-box"><h2>Send a parcel</h2></div>
                        </div>
                    </div>

                    <form class="form-horizontal estimate-form" action="" method="post">
                        <div class="form-group">
                            <label class="sr-only" for="inputFirstName">Name</label>
                            <input type="text" class="form-control" id="inputFirstName" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="inputLastName">Surname</label>
                            <input type="text" class="form-control" id="inputLastName" placeholder="Surname">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="inputEmail">Email Address</label>
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
                        </div>
                        <div class="form-group contact">
                            <label class="sr-only" for="inputContact">Contact Number</label>
                            <input type="text" class="form-control" id="inputContact" placeholder="Contact Number" required>
                        </div>
                        <div class="form-group switch-btn">
                            <label class="switch">
                              <input type="checkbox">
                              <span class="slider round"></span>
                            </label>
                            Set Company Information? (Optional)
                        </div>
                        <div class="checkbox terms">
                            <label>
                                <input type="checkbox" value="">
                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                <em>I Agree To The <a href="javascript:void(0);">Terms & Conditions</a></em>
                            </label>
                        </div>
                        <!-- <div class="checkbox">
                            <label><input type="checkbox"> I Agree To The <a href="javascript:void(0);">Terms & Conditions</a></label>
                        </div> -->
                        <button type="submit" class="btn btn-primary">Get a Free Estimate</button>                      
                    </form>
                </div>              
            </div>
        </div>
    </div>
    <section class="mainsection">
        <div class="container">
            <div id="optionblock" class="block-section">
                <div class="row animatedParent animateOnce" data-sequence="500">
                    <div class="col-md-4">
                        <div class="box-grey animated fadeInDown" data-id="1">
                            <img src="images/icon-send.png" alt="">
                            <h2>Need To Send<br>A Package?</h2>
                            <a href="javascript:void(0);">&nbsp;</a>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="box-grey animated fadeInDown" data-id="2">
                            <img src="images/icon-delivery.png" alt="">
                            <h2>Can You Deliver<br>Packages?</h2>
                            <a href="javascript:void(0);">&nbsp;</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box-grey animated fadeInDown" data-id="3">
                            <img src="images/icon-about.png" alt="">
                            <h2>ABOUT<br>SENDEDDY</h2>
                            <a href="javascript:void(0);">&nbsp;</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider-block">&nbsp;</div>
            <div id="ratesblock" class="rate-block-section">
                <div class="row animatedParent animateOnce">
                    <div class="col-md-12">
                        <div class="animated fadeInLeft">
                            <h2>See Our Rates!</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="buttonblock">
                                <a href="javascript:void(0);">RATES</a>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="divider-block">&nbsp;</div>
            <div id="coverageblock" class="coverage-block-section">
                <div class="row animatedParent animateOnce">
                    <div class="col-md-4 animated fadeInLeft">
                        <div class="coverage-txt">
                            <h2>Coverage</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                    <div class="col-md-8 animated fadeInRight text-right mapblock">
                        <div class="coveragemap">
                            <img src="images/coverage-map.png" alt="" class="visible-desktop">
                            <div class="mapline map1 animated fadeInDown visible-desktop delay-750"><img src="images/map1.png" alt=""></div>
                            <div class="mapline map2 animated fadeInDown visible-desktop delay-1000"><img src="images/map2.png" alt=""></div>
                            <div class="mapline map3 animated fadeInDown visible-desktop delay-1250"><img src="images/map3.png" alt=""></div>
                            <div class="mapline map4 animated fadeInDown visible-desktop delay-1500"><img src="images/map4.png" alt=""></div>
                            <img src="images/coverage-map-mobile.png" alt="" class="visible-mobile">
                        </div>

                    </div>
                </div>
            </div>
            <div class="divider-block">&nbsp;</div>
            <div id="orderblock" class="order-block-section">
                <div class="row animatedParent animateOnce">
                    <div class="col-md-12">
                        <div class="animated fadeInLeft">
                            <h2>PLACE AN ORDER!</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis. </p>
                            <div class="buttonblock">
                                <a href="javascript:void(0);">ORDER</a>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>
            <div class="divider-block">&nbsp;</div>         
        </div>
        <div id="bottomblock">
            <div class="container">
                <div class="row animatedParent animateOnce">
                    <div class="col-md-12">
                        <div class="animated fadeInUp contentblock">
                            <h2>WANT TO BE AN EDDY?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="buttonblock">
                                <a href="javascript:void(0);">RATES</a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </section>


    @stop

{{-- This is used for custom JS css at footer --}}
    @section('pagejs')

        <!-- Slider Script -->
        <script src="{{ asset('js/swiper.min.js') }}"></script>
        <script type="text/javascript">
            var swiper = new Swiper('.swiper-container', {
              //spaceBetween: 30,
              effect: 'fade',
              loop: true,
              autoplay: {
                delay: 5000,
              },
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
              navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
              },
            });
        </script>
        <!-- Slider Script -->

    @stop