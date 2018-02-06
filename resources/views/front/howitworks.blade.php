@extends('front.layouts.main')

{{-- The Page Title --}}
    @section('title')
        How It Works
    @stop

{{-- This is used for custom JS css at Header --}}
    @section('pagestyle')
    <!-- Additional Style -->
    @stop

{{-- This is the main content area --}}
    @section('content')


    <section class="mainsection">
        <div class="container">
            <div id="block_works" class="block-section-2">
                <div class="row animatedParent animateOnce" data-sequence="800">
                    <div class="col-md-6">
                        <div class="left-block animated fadeInLeft" data-id="1">
                            <h1>How It Works</h1>
                            <div class="list1">
                                <div class="numberlist">
                                    1
                                </div>
                                <div class="content-block">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                </div>
                                <div class="numberlist">
                                    2
                                </div>
                                <div class="content-block">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                </div>
                                <div class="numberlist">
                                    3
                                </div>
                                <div class="content-block">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="right-block animated fadeInRight" data-id="2">
                            <div class="imgblock">
                                <img src="{{ asset('images/how-it-works.jpg') }}" alt="">
                                <a href="javascript:void(0);">Get a Free<br>Estimate</a>
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
<!-- additional JS -->

    @stop