@extends('layouts.base')


@section('content')




        <!-- start causes-single-wrapper -->
        <section class="causes-single-wrapper section-padding" style="padding-top: 12px;">
            <div class="container">
                <div class="row">
                    <div class="col col-md-9">
                        <div class="causes-single">

                            <div class="causes-list-box">
                                <div class="title">
                                    @if (request()->get('type') =='partner')

                                    <h3>SIGN UP AS PARTNER</h3>
                                    @else
                                    <h3>SIGN UP AS VOLUNTEER</h3>

                                    @endif


                                </div>
                                <div class="inner-details">


                                    <div style="height: 560px;" class="contact-page">

                                        <!-- start contact-main-content -->
                                        <div   class=" contact-main-content  ">




                                                <div style="top: auto;" class="contact-form">
                                                    @if(Session::has('message'))
                                                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                                                    @endif
                                                        <div class="row  ">
                                                            <div class="col col-md-12  mx-left form-inner">




                                                                <form style="margin-top: -30px;" class="form row"  method="post" action="/register-member">
                                                                    @csrf

                                                                    <input type="hidden" name="membership_type" value="{{request()->get('type')=='partner'?'partner':'volunteer'}}">


                                                                    <div class="col col-md-6">
                                                                        <label for="">Fullname</label>
                                                                        <input type="text" class="form-control" name="name" placeholder="your name..">
                                                                    </div>
                                                                    <div class="col col-md-6">
                                                                        <label for="">Email</label>
                                                                        <input type="email" class="form-control" name="email" placeholder="your email..">
                                                                    </div>
                                                                    <div class="col col-md-6">
                                                                        <label for="">Phone</label>
                                                                        <input type="phone" class="form-control" name="phone" placeholder="Enter phone number">
                                                                    </div>
                                                                    <div class="col col-md-6">
                                                                        <label for="">Country</label>
                                                                        <select name="country" id="" class="form-control shadow border">
                                                                            <option value="Nigeria">Nigeria</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col col-md-12">
                                                                        <label for="">Address</label>
                                                                        <input type="text" class="form-control" name="address" placeholder="Enter Address">
                                                                    </div>


                                                                @if (request()->get('type')=='partner')

                                                                <div class="col col-md-6">
                                                                    <label for="">Amount</label>
                                                                    <input type="number" class="form-control" name="phone" placeholder="Enter Amount">
                                                                </div>

                                                                <div class="col col-md-6">
                                                                    <label for="">Commitment</label>
                                                                    <select name="" id="" class="form-control shadow border">
                                                                        <option value="Weekly">Weekly</option>
                                                                        <option value="Monthly">Monthly</option>
                                                                        <option value="Quarterly">Quarterly</option>
                                                                        <option value="Semiannually">Semiannually</option>

                                                                        <option value="Yearly">Yearly</option>



                                                                    </select>
                                                                </div>

                                                                @endif


                                                                    <div class="col col-md-12 mt-3">
                                                                        <button type="submit" class="bnt theme-btn">Submit</button>
                                                                        <span id="loader"><img src="images/contact-ajax-loader.gif" alt="Loader"></span>
                                                                    </div>
                                                                    <div class="col col-md-12">
                                                                        <div id="success">Thank you</div>
                                                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
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
