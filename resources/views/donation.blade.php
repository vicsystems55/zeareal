@extends('layouts.base')


@section('content')




        <!-- start causes-single-wrapper -->
        <section class="causes-single-wrapper section-padding" style="padding-top: 12px;">
            <div class="container">
                <div class="row">
                    <div class="col col-md-9">
                        <div class="causes-single">
                            <div class="img-holder">
                                <img src="images/causes-single/img-1.jpg" alt class="img img-responsive">
                            </div>
                            <div class="causes-list-box">
                                <div class="title">
                                    <h3>{{$cause->name}}</h3>
                                    <div class="progress">
                                        <div class="progress-bar" data-percent="{{number_format(($cause->amount_raised * 100)/$cause->goal_amount)}}"></div>
                                    </div>
                                    <h4>Raised: <span>NGN {{number_format($cause->amount_raised)}}</span> / NGN {{number_format($cause->goal_amount)}}</h4>

                                </div>
                                <div class="inner-details">
                                    <div style="height: 560px;" class="contact-page">

                                        <!-- start contact-main-content -->
                                        <div   class=" contact-main-content  ">




                                                <div style="top: auto;" class="contact-form">

                                                        <div class="row  ">
                                                            <div class="col col-md-12  mx-left form-inner">

                                                                <form action="/donate" method="post" class="form row" style="margin-top: -30px;"  id="contact-for">

                                                                    @csrf

                                                                    <input type="hidden" name="donation_programme_id" value="{{$cause->id}}">

                                                                    <div class="col col-md-6">
                                                                        <label for="amount" style="text-align: left;">Amount (NGN):</label>
                                                                        <input type="number" class="form-control" name="amount" min="1000" max="50000000" value="1000" placeholder="Enter Amount">
                                                                    </div>
                                                                    <div class="col col-md-6">
                                                                        <label for="name">Fullname</label>
                                                                        <input type="text" class="form-control" name="name" placeholder="your name..">
                                                                    </div>
                                                                    <div class="col col-md-6">
                                                                        <label for="email">Email</label>
                                                                        <input type="email" class="form-control" name="email" placeholder="your email..">
                                                                    </div>
                                                                    <div class="col col-md-6">
                                                                        <label for="phone">Phone</label>
                                                                        <input type="phone" class="form-control" name="phone" placeholder="Enter phone number">
                                                                    </div>
                                                                    <div class="col col-md-12">
                                                                        <label for="address">Address</label>
                                                                        <input type="text" class="form-control" name="address" placeholder="Enter Address">
                                                                    </div>

                                                                    <div class="custom-control custom-radio ">
                                                                        <input type="radio" id="customRadio1" name="payment_method" value="paystack" class="custom-control-input">
                                                                        <label class="custom-control-label" for="customRadio1">Pay with paypal</label>
                                                                      </div>
                                                                      <div class="custom-control custom-radio">
                                                                        <input type="radio" id="customRadio2" name="payment_method" value="paypal" class="custom-control-input">
                                                                        <label class="custom-control-label" for="customRadio2">Pay with paystack</label>
                                                                      </div>

                                                                    <div class="col col-md-12">
                                                                        <button type="submit" class="bnt theme-btn">Submit</button>

                                                                    </div>

                                                                </form>
                                                            </div>
                                                        </div> <!-- end row -->

                                                </div>

                                        </div>
                                        <!-- end contact-main-content -->



                                    </div>
                                </div>
                            </div>
                        </div> <!-- end causes single -->
                    </div> <!-- end col -->

                    <div class="col col-md-3 sidebar-wrapper">
                        <div style="display: none;" class="sidebar">
                            <div class="widget search-widget">
                                <form action="#" class="form">
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search here" required>
                                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>

                            <div class="widget recent-post">
                                <h3>Recent post</h3>
                                <div>
                                    <h4><a href="#">Education program in Uganda</a></h4>
                                    <a href="#" class="date">November 26, 2016</a>
                                </div>
                                <div>
                                    <h4><a href="#">War kids in Syria</a></h4>
                                    <a href="#" class="date">November 26, 2016</a>
                                </div>
                                <div>
                                    <h4><a href="#">African water crisis : Children and women</a></h4>
                                    <a href="#" class="date">November 26, 2016</a>
                                </div>
                            </div>

                            <div class="widget recent-causes">
                                <h3>Recent causes</h3>
                                <div>
                                    <h4><a href="#">Blood Donation in virginia</a></h4>
                                    <p class="remaing-date">22 days remaing</p>
                                </div>
                                <div>
                                    <h4><a href="#">Boston orphanage opening</a></h4>
                                    <p class="remaing-date">22 days remaing</p>
                                </div>
                                <div>
                                    <h4><a href="#">Hair for cancer</a></h4>
                                    <p class="remaing-date">22 days remaing</p>
                                </div>
                            </div>

                            <div class="widget recent-events">
                                <h3>Events nearby</h3>
                                <div>
                                    <h4><a href="#">Tree Plantation in Ohio</a></h4>
                                    <p class="date">November 26, 2016</p>
                                </div>
                                <div>
                                    <h4><a href="#">Florida aftermath help</a></h4>
                                    <p class="date">November 26, 2016</p>
                                </div>
                                <div>
                                    <h4><a href="#">NY Cancer awareness</a></h4>
                                    <p class="date">November 26, 2016</p>
                                </div>
                            </div>
                        </div> <!-- end sidebar -->
                    </div> <!-- end col -->
                </div> <!-- end row -->


            </div> <!-- end contianer -->
        </section>
        <!-- end causes-single-wrapper -->

@endsection
