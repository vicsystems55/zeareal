<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.vicSsystems Technologies Ltd..com/charity-plus/multipage/charity-plus/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:24:47 GMT -->
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Zearealcare Foundation Responsive HTML Template">
    <meta name="author" content="vicSsystems Technologies Ltd.">

    <!-- Page Title -->
    <title>Zeareal Care Foundation | Changing Lives</title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">


    <!-- Icon fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Plugins for this template -->
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper contact-page">

        @include('incs.header')


        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-bg"></div>
            <div class="container">
                <div class="title-box">
                    <h1>Contact us</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact us</li>
                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->


        <!-- start contact-main-content -->
        <section class="contact-main-content section-padding">
            <div class="container">
                <div class="row contact-info">
                    <div class="col col-sm-4">
                        <div class="wow slideInUpSlow">
                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                            <h3>Address</h3>
                            <p>Dei dei, Abuja-FCT</p>
                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="wow slideInUpSlow" data-wow-delay="0.2s">
                            <span class="icon"><i class="fa fa-envelope-o"></i></span>
                            <h3>Email</h3>
                            <p>support@zearealcarefoundation.org</p>

                        </div>
                    </div>
                    <div class="col col-sm-4">
                        <div class="wow slideInUpSlow" data-wow-delay="0.4s">
                            <span class="icon"><i class="fa fa-fax"></i></span>
                            <h3>Phone</h3>
                            <p>+234 902 882 0064</p>

                        </div>
                    </div>
                </div> <!-- end contact info -->
            </div> <!-- end container -->

            <div class="row map-concate-form">
                <div class="col col-xs-12">
                    <div class="map" id="map"></div>
                </div>
                <div class="contact-form">
                    <div class="container">
                        <div class="row  wow bounceInUp">
                            <div class="col col-md-10 col-md-offset-1 form-inner">
                                <h3>Leave us a message</h3>
                                <form class="form row" id="contact-form">
                                    <div class="col col-md-6">
                                        <input type="text" class="form-control" name="name" placeholder="your name..">
                                    </div>
                                    <div class="col col-md-6">
                                        <input type="email" class="form-control" name="email" placeholder="your email..">
                                    </div>
                                    <div class="col col-md-12">
                                        <input type="text" class="form-control" name="subject" placeholder="subject..">
                                    </div>
                                    <div class="col col-md-12">
                                        <textarea class="form-control" name="message" placeholder="write here.."></textarea>
                                    </div>
                                    <div class="col col-md-12">
                                        <button type="submit" class="bnt theme-btn">Send</button>
                                        <span id="loader"><img src="images/contact-ajax-loader.gif" alt="Loader"></span>
                                    </div>
                                    <div class="col col-md-12">
                                        <div id="success">Thank you</div>
                                        <div id="error"> Error occurred while sending email. Please try again later. </div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end row -->
                    </div> <!-- end container -->
                </div>
            </div>
        </section>
        <!-- end contact-main-content -->


        @include('incs.footer')
    </div>
    <!-- end of page-wrapper -->


    <!-- All JavaScript files
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins for this template -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Google map API -->
    <script src="http://maps.google.com/maps/api/js?key="></script>

    <!-- Custom script for this template -->
    <script src="js/script.js"></script>
</body>

<!-- Mirrored from html.themexriver.com/charity-plus/multipage/charity-plus/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Apr 2023 10:25:33 GMT -->
</html>
