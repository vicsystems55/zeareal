@extends('layouts.base')

@section('content')

        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-bg" style="background-image: url({{asset('images/page-title-bg/causes-pagetitle.jpg')}})" ></div>
            <div class="container">
                <div class="title-box">
                    <h1><span>Our</span> Projects</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Causes grid</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

                    <!-- start urgent-donation -->
                    <section class="urgent-donation" style="z-index: 99;">
                        <div class="container">
                            <div class="row urgent-inner">
                                <div class="col col-lg-10 col-lg-offset-1">
                                    <div class="urgent-slider">
                                        <div class="urgent-box">
                                            <div class="img-holder">
                                                <img src="images/urgent-slider/img-2.jpg" alt class="img img-responsive">
                                            </div>
                                            <div class="details">
                                                <span>Urgent</span>
                                                <h2>Help us fight against Malnourishment</h2>

                                                <div class="progress-wrapper">
                                                    <div class="progress">
                                                        <div class="progress-bar" data-percent="85"></div>
                                                    </div>
                                                    <div class="goal-raised">
                                                        <div class="goal">
                                                            <span>Goal</span>
                                                            <h4>NGN 12,500</h4>
                                                        </div>
                                                        <div class="raised">
                                                            <span>Raised</span>
                                                            <h4>NGN 12,500</h4>
                                                        </div>
                                                    </div>
                                                    <form action="#" class="form">
                                                        <div>
                                                            <input type="text" class="form-control" placeholder="- Enter Amount -" required>
                                                        </div>
                                                        <div>
                                                            <button type="submit" class="btn theme-btn">Donate</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="urgent-box">
                                            <div class="img-holder">
                                                <img src="images/urgent-slider/img-2.jpg" alt class="img img-responsive">
                                            </div>
                                            <div class="details">
                                                <span>Urgent</span>
                                                <h2>Help us fight against Malnourishment</h2>

                                                <div class="progress-wrapper">
                                                    <div class="progress">
                                                        <div class="progress-bar" data-percent="85"></div>
                                                    </div>
                                                    <div class="goal-raised">
                                                        <div class="goal">
                                                            <span>Goal</span>
                                                            <h4>NGN 12,500</h4>
                                                        </div>
                                                        <div class="raised">
                                                            <span>Raised</span>
                                                            <h4>NGN 12,500</h4>
                                                        </div>
                                                    </div>
                                                    <form action="#" class="form">
                                                        <div>
                                                            <input type="text" class="form-control" placeholder="- Enter Amount -" required>
                                                        </div>
                                                        <div>
                                                            <button type="submit" class="btn theme-btn">Donate</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end urgent-slider -->
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div> <!-- end container -->
                    </section>
                    <!-- end urgent-donation -->




                <!-- start latest-causes -->
                <section class="latest-causes section-padding">
                    <div class="container">
                        <div class="row section-title-s2">
                            <div class="col col-xs-12">
                                <h2><span>recent</span> projects</h2>
                            </div>
                        </div> <!-- end section-title -->

                        <div class="row content">
                            <div class="col col-md-4 col-xs-6">
                                <div class="title">
                                    <ul>
                                        <li><h3>QUALITY HEALTH</h3></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="img-progress">
                                    <div class="img-holder">
                                        <img src="images/latest-causes/img-1.jpg" alt class="img img-responsive">
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="85"></div>
                                    </div>
                                </div>
                                <div class="donate-amount">
                                    <ul>
                                        <li>Raised: <span>NGN 52,872</span> / NGN 70,000</li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>Iste natus error sit voluptatem accusantium dolo remque laudantium.</p>
                                    <a href="#" class="btn theme-btn">Donate now</a>
                                </div>
                            </div>

                            <div class="col col-md-4 col-xs-6">
                                <div class="title">
                                    <ul>
                                        <li><h3>COVID-19 RESPONSE</h3></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="img-progress">
                                    <div class="img-holder">
                                        <img src="images/latest-causes/img-2.jpg" alt class="img img-responsive">
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="55"></div>
                                    </div>
                                </div>
                                <div class="donate-amount">
                                    <ul>
                                        <li>Raised: <span>NGN 52,872</span> / NGN 70,000</li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>Iste natus error sit voluptatem accusantium dolo remque laudantium.</p>
                                    <a href="#" class="btn theme-btn">Donate now</a>
                                </div>
                            </div>

                            <div class="col col-md-4 col-xs-6">
                                <div class="title">
                                    <ul>
                                        <li><h3>FOOD & WATER SUPPORTS</h3></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="img-progress">
                                    <div class="img-holder">
                                        <img src="images/latest-causes/img-3.jpg" alt class="img img-responsive">
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="25"></div>
                                    </div>
                                </div>
                                <div class="donate-amount">
                                    <ul>
                                        <li>Raised: <span>NGN 52,872</span> / NGN 70,000</li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>Iste natus error sit voluptatem accusantium dolo remque laudantium.</p>
                                    <a href="#" class="btn theme-btn">Donate now</a>
                                </div>
                            </div>

                            <div class="col col-md-4 col-xs-6">
                                <div class="title">


                                    <ul>
                                        <li><h3>EDUCATION FOR RURAL CHILDREN</h3></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="img-progress">
                                    <div class="img-holder">
                                        <img src="images/latest-causes/img-4.jpg" alt class="img img-responsive">
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="95"></div>
                                    </div>
                                </div>
                                <div class="donate-amount">
                                    <ul>
                                        <li>Raised: <span>NGN 52,872</span> / NGN 70,000</li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>Iste natus error sit voluptatem accusantium dolo remque laudantium.</p>
                                    <a href="#" class="btn theme-btn">Donate now</a>
                                </div>
                            </div>

                            <div class="col col-md-4 col-xs-6">
                                <div class="title">
                                    <ul>
                                        <li><h3>YOUTH EMPOWERMENT PROGRAMS</h3></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="img-progress">
                                    <div class="img-holder">
                                        <img src="images/latest-causes/img-5.jpg" alt class="img img-responsive">
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="70"></div>
                                    </div>
                                </div>
                                <div class="donate-amount">
                                    <ul>
                                        <li>Raised: <span>NGN 52,872</span> / NGN 70,000</li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>Iste natus error sit voluptatem accusantium dolo remque laudantium.</p>
                                    <a href="#" class="btn theme-btn">Donate now</a>
                                </div>
                            </div>

                            <div class="col col-md-4 col-xs-6">
                                <div class="title">
                                    <ul>
                                        <li><h3>CHILD RIGHTS ADVOCACY</h3></li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="img-progress">
                                    <div class="img-holder">
                                        <img src="images/latest-causes/img-6.jpg" alt class="img img-responsive">
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="15"></div>
                                    </div>
                                </div>
                                <div class="donate-amount">
                                    <ul>
                                        <li>Raised: <span>NGN 52,872</span> / NGN 70,000</li>
                                        <li></li>
                                    </ul>
                                </div>
                                <div class="text">
                                    <p>Iste natus error sit voluptatem accusantium dolo remque laudantium.</p>
                                    <a href="#" class="btn theme-btn">Donate now</a>
                                </div>
                            </div>
                        </div> <!-- end content -->
                    </div> <!-- end container -->
                </section>
                <!-- end latest-causes -->




@include('incs.newsletter')

@endsection
