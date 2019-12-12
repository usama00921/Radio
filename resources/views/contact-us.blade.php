@extends('layouts.app')

@section("content")
            <!-- Start page title -->
            <section class="page-title-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title text-center">
                                <h1>Contact Us</h1>
                            </div>
                            <div class="breadcumb-area  text-center">
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Contact Us</li>
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
            <!-- Start keep in touch area -->
            <section class="keep-in-touch-area pt-90 pb-90">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>Keep In <span>Touch</span></h2>
                                <img src="img/title-bottom.png" alt="">
                                <p>TechCeFaCos Group is a Cameroon based Civil Society - Non Profit Organization legalized in 2004 with Auth. No.: NW/GP/27/04/8170, empowering the organisation to enhance and foster technological strategies to boost development and humanitarian initiatives that create sustainable impacts.</p>
                            </div>
                        </div>
                        <!-- End section title -->
                        <div class="keep-in-touch-therd-box">
                            <!-- Start single box -->
                            <div class="col-sm-4">
                                <div class="single-box text-center">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                    <h3>ADDRESS</h3>
                                    <p>Mile 3 Nkwen beside Farmers House, <br>PO Box 6314 - Bamenda, North West Region,<br>Cameroon</p>
                                </div>
                            </div>
                            <!-- End single box -->
                            <!-- Start single box -->
                            <div class="col-sm-4">
                                <div class="single-box text-center">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h3>CALL US</h3>
                                    <p>+237 33481250</p>
                                </div>
                            </div>
                            <!-- End single box -->
                            <!-- Start single box -->
                            <div class="col-sm-4">
                                <div class="single-box text-center">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <h3>EMAIL US</h3>
                                    <p>info@techcefacos.org</p>
                                </div>
                            </div>
                            <!-- End single box -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End keep in touch area -->
            <!-- Start contact form area -->
            <section class="contact-form-area pb-60 pt-90">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>Say <span>Hello</span></h2>
                                <img src="img/title-bottom.png" alt="">
                            </div>
                        </div>
                        <!-- End section title -->
                        <div class="col-sm-12">
                            <div class="contact-form">
                                <form id="contact-form" method="POST" action="mail.php">
                                    <div class="form-fields">
                                        <label for="name">Name</label>
                                        <input id="name" name="name" type="text" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-fields">
                                        <label for="email">Email</label>
                                        <input id="email" name="email" type="text" placeholder="Your Email" required>
                                    </div>
                                    <div class="form-fields last">
                                        <label for="phone">Phone</label>
                                        <input id="phone" name="phone" type="text" placeholder="Your Phone" required>
                                    </div>
                                    <div class="message-fields">
                                        <label for="mess">Message</label>
                                        <textarea name="mess" id="mess" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-button">
                                        <button type="submit">Send your message</button>
                                        <button type="reset">Reset</button>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End contact form area -->

            

    <!-- Start google map -->
    <div class="google-map pb-90">
                <div id="googleMap"></div>
            </div>
            <!-- End google map -->
     @endsection