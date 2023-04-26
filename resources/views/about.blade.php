@extends('layouts.base')


@section('content')


        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-bg" style="background-image: url({{asset('images/page-title-bg/causes-pagetitle.jpg')}})"></div>
            <div class="container">
                <div class="title-box">
                    <h1>About us</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">About us</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->



        <!-- start about-details -->
        <section class="about-us-st section-padding">
            <div class="container">
                <h2><span>About</span> us</h2>
                <div class="row">
                    <div class="col col-md-6">
                        <div class="left-col">
                            <div class="company">
                                <h3>We are <span>Zeareal Care Foundation</span></h3>
                                <span>Making the world a better place</span>
                            </div>
                            <p>ZearealCare Foundation is a non-governmental organization committed to improving the lives of underprivileged communities through education, healthcare, and social welfare initiatives. Our team of dedicated volunteers and staff work tirelessly to provide sustainable solutions that empower individuals and transform communities. Join us in our mission to make the world a better place for all.</p>
                            <h3>Mission</h3>
                            <p>Is to facilitate sustainable development programme to improve on the living conditions of vulnerable youths, children, women and other minority groups through Peace-building, Socio-economic empowerment programs, networking, education, health (COVID-19), advocacy and promotion of democracy, justice and equity.</p>

                            <h3>Vision</h3>
                            <p>At Zeareal Care Foundation, we envision a world where every person has access to quality education, healthcare, and social support. We are committed to creating sustainable solutions that empower individuals and transform communities, ultimately building a more just and equitable society for all.</p>


                        </div> <!-- end left-col -->
                    </div> <!-- end col -->

                    <div class="col col-md-6">
                        <div class="right-col">
                            <div class="video">
                                <img src="images/about/video-poster-2.jpg" alt="" class="img img-responsive">
                                <a href="https://www.youtube.com/embed/opj24KnzrWo?autoplay=1" class="video-btn" data-type="iframe"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end about-details -->

                <!-- start help -->
                <section class="help section-padding " style="background-color: black; color: white;">
                    <div class="container">
                        <div class="row section-title">
                            <div class="col col-xs-12">
                                <span>Join our mission</span>
                                <h2 style="color: white" >How can you help</h2>
                            </div>
                        </div> <!-- end section-title -->

                        <div class="row">
                            <div class="col col-md-6">
                                <div class="help-item wow slideInUpSlow">

                                    <div class="details">
                                        <h3 style="color: white">Purpose</h3>
                                        <p>To provide Socio-ecomomic empowerment opportunities through livelihood vocational skills, entrepreneurship development, revolving fund, market access and financial linkage services to women, youth, smallholder  farmers and cooperative societies to boost income generation, poverty alleviation and employment creation in Africa</p>
                                    </div>
                                </div>
                                <div class="help-item wow slideInUpSlow" data-wow-delay="0.3s">

                                    <div class="details">
                                        <h3 style="color: white">Value</h3>
                                        <p>Includes : Respect for humanity and dignity, Respect for diversity, Self- belief, Self- reliance, Gender equality, Integrity, Accountability, Hardwork, Productivity, Innovation and Excellence.</p>
                                    </div>
                                </div>
                                <div class="help-item wow slideInUpSlow" data-wow-delay="0.6s">

                                    <div class="details">
                                        <h3 style="color: white">Beliefs</h3>
                                        <p>To promote the fundamental human rights and address the issue of gender based violence(GBV) among vulnerable women, youth, children and other minority groups through awareness creation, advocacy programme and capacity building in Nigeria.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col col-md-5 col-md-offset-1">
                                <div class="box">
                                    <div class="video">
                                        <img src="images/help-video-bg.jpg" alt class="img img-responsive">
                                        <a href="https://www.youtube.com/embed/opj24KnzrWo?autoplay=1" class="video-btn" data-type="iframe"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end help -->



        <!-- start cta-2 -->
        <section class="cta-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-md-5 col-sm-4 join-us">
                        <span>Join us</span>
                    </div>

                    <div class="col col-md-7 col-sm-8 sing-up  wow fadeInRightSlow">
                        <h3><span><img src="images/sing-up-icon.png" alt></span> Sign up for volunteer program</h3>
                        <span>Serve the humanity</span>
                        <p>Iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <a href="#" class="btn theme-btn">Sing up</a>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end cta-2 -->


        <!-- start volunteers -->
        <section class="volunteers section-padding">
            <div class="container">
                <div class="row section-title">
                    <div class="col col-xs-12">
                        <span>Meet us</span>
                        <h2>Our Team</h2>
                    </div>
                </div> <!-- end section-title -->

                <div class="row volunteers-grid">

                    <div class="col col-md-12 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-3.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                     <div class="col col-md-4 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-3.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col col-md-4 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-3.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-4.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-5.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col col-md-4 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-4.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col col-md-4 col-xs-6">
                        <div class="box">
                            <div class="img-holder">
                                <img src="images/volunteers/img-5.jpg" alt class="img img-responsive">
                            </div>
                            <div class="hover-text">
                                <div>
                                    <h4>Hasib sharif</h4>
                                    <span>CEO, Hooli</span>
                                    <ul class="social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                </div> <!-- end row -->
            </div> <!-- end container -->
        </section>
        <!-- end volunteers -->


        <!-- start newsletter -->
        <section class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col col-md-5 children-holder"></div>
                    <div class="col col-md-7 subscribe">
                        <h3>Subscribe us.</h3>
                        <p>For <span>news</span> updates and promotional <span>events</span></p>

                        <form action="#">
                            <div>
                                <input class="form-control" type="email" required placeholder="email address">
                                <button type="submit" class="btn theme-btn">Subscribe</button>
                            </div>
                        </form>
                        <div class="pluses">
                            <i class="fa fa-plus"></i>
                            <i class="fa fa-plus"></i>
                        </div>
                    </div>
                </div> <!-- end row -->
            </div> <!-- end container-fluid -->
        </section>
        <!-- end newsletter -->
@endsection
