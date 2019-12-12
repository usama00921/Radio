@extends('layouts.app')

@section('content')
 <!-- Start page title -->
 <section class="page-title-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title text-center">
                                <h1>About us</h1>
                            </div>
                            <div class="breadcumb-area  text-center">
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">About us</li>
                                </ol>
                            </div>
                            <div class="back-home">
                                <a href="index.html"><i class="fa fa-arrow-left" aria-hidden="true"></i> BACK TO HOME</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End page title -->
            <!-- Start about content area -->
            <section class="about-content-area pt-90 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="about-content">
                                <!-- Start section title -->
                                <div class="section-title text-center">
                                    <h2>About <span>Us</span></h2>
                                    <img src="img/title-bottom.png" alt="">
                                </div>
                                <!-- End section title -->
                                <p>TechCeFaCos Group is a Cameroon based Civil Society - Non Profit Organization legalized in 2004 with Auth. No.: NW/GP/27/04/8170, empowering the organisation to enhance and foster technological strategies to boost development and humanitarian initiatives that create sustainable impacts.</p>
                                <p>TechCeFaCos Group is an 'Organization in Special Consultative Status with the Economic and Social Council since 2013' to enables it to actively engage with ECOSOC and its subsidiary bodies, as well as with the UN Secretariat, programmes, funds and agencies in a number of ways.</p>
                                <div class="about-button btn-lg-f bo-ra-3">
                                    <a href="#">Become a Volunteer</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="about-image">
                                <img src="img/about/about-image.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End about content area -->
            <!-- Start what we do area -->
            <section class="what-we-do-area pb-70">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>What We <span>Do</span></h2>
                                <img src="img/title-bottom.png" alt="">
                            </div>
                        </div>
                        <!-- End section title -->
                        <div class="what-we-do">
                            <!-- Start single we do -->
                            <div class="col-sm-4">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img/about/we-do-one.jpg" alt="">
                                    </div>
                                    <div class="we-do-text">
                                        <h5>Mission Statement</h5>
                                        <p class="about-three-sec-text">TechCeFaCos Group is focus on enhancing and fostering strategies to boost development and humanitarian initiatives that creates sustainable impacts.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single we do -->
                            <!-- Start single we do -->
                            <div class="col-sm-4">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img/about/we-do-two.jpg" alt="">
                                    </div>
                                    <div class="we-do-text">
                                        <h5>Vision</h5>
                                        <p class="about-three-sec-text">To ensure that developing communities are transforms into emerging communities by 2035 by boosting and fostering local economy and mainstream into global economy.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single we do -->
                            <!-- Start single we do -->
                            <div class="col-sm-4">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img/about/we-do-three.jpg" alt="">
                                    </div>
                                    <div class="we-do-text">
                                        <h5>Aim</h5>
                                        <p class="about-three-sec-text">Empowering people and communities to be self-reliance and self-dependent with their potential and available resources to overcome obstacles and turn them into opportunities based on SDGs - objectives.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single we do -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End what we do area -->

@endsection

            
 