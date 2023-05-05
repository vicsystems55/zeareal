@extends('layouts.base')

@section('content')

        <!-- start page-title -->
        <section class="page-title">
            <div class="page-title-bg" style="background-image: url({{asset('images/page-title-bg/causes-pagetitle.jpg')}})" ></div>
            <div class="container">
                <div class="title-box">
                    <h1><span>Program</span> Area</h1>
                    <ol class="breadcrumb">
                        <li><a href="#">zeareal Care Foundation works in Nigeria and reaches more than 2 million people around the nation through poverty-fighting development and humanitarian aid programs.</a></li>

                    </ol>
                </div>
            </div> <!-- end container -->
        </section>
        <!-- end page-title -->

                <!-- start important-causes -->
                <section class="important-causes section-padding">
                    <div class="container">
                        <div class="row section-title-s3">
                            <div class="col col-md-10 col-md-offset-1">
                                <h2><span>Biggest</span> Goals</h2>
                                <p>Our main focus is providing basic needs for the vulnerable – water, food, clothes, health, training, home, and education.  See how we do it</p>
                            </div>
                        </div> <!-- end section-title -->

                        <div class="row content important-causes-content">
                            <div class="col-md-6 col-xs-6">
                                <div class="gri">
                                    <div class="details">

                                        <h3>Healthcare</h3>
                                        <p class="" style="color: whie;">
                                            We are focusing services on vulnerable groups such as women and children in the following areas:
                                            – Routine free medical outreaches to complement the efforts of the primary healthcare services.
                                            – HIV/ AIDS and other diseases awareness, prevention and care services.</p>
                                    </div>

                                </div>
                            </div>

                            <div class=" col-md-6 col-xs-6">
                                <div class="gri">
                                    <div class="details">

                                        <h3>Advocacy</h3>
                                        <p class="" style="color: whie;">
                                            Every year, all over the nation, we raise awareness among hundreds of thousands of people to better stop domestic violence and protect girl child from sexual violence.</p>
                                    </div>

                                </div>
                            </div>



                            {{-- <div class=" col-md-6 col-xs-6">
                                <div class="gri">
                                    <div class="details">

                                        <h3>Education</h3>
                                        <p class="" style="color: whie;">
                                            Rock of ages Empowerment foundation aims at reducing illiteracy in Nigerian rural communities.
                                            Engage in education supports programs such as distribution of books, school uniform, bags, and laboratory equipment etc to primary and secondary schools.</p>
                                    </div>

                                </div>
                            </div> --}}
                            {{--
                            <div class="col col-md-6 col-xs-6">
                                <div class="gri">
                                    <div class="details">

                                        <h3>Empowerment</h3>
                                        <p class="" style="color: whie;">

                                                <li>Skill acquisitions training.</li>
                                                <li>Capacity building and development.</li>
                                                <li>Financial support.</li>
                                                <li>Business Summit/ Seminars.</li>
                                                <li>Provision of shelter.</li>
                                                <li>Provision of clothing.</li>


                                        </p>
                                    </div>

                                </div>
                            </div> --}}


                        </div>

                        <div class="row content important-causes-content">




                            <div class=" col-md-6 col-xs-6">
                                <div class="gri">
                                    <div class="details">

                                        <h3>Education</h3>
                                        <p class="" style="color: whie;">
                                            Rock of ages Empowerment foundation aims at reducing illiteracy in Nigerian rural communities.
                                            Engage in education supports programs such as distribution of books, school uniform, bags, and laboratory equipment etc to primary and secondary schools.</p>
                                    </div>

                                </div>
                            </div>

                            <div class="col col-md-6 col-xs-6">
                                <div class="gri">
                                    <div class="details">

                                        <h3>Empowerment</h3>
                                        <p class="" style="color: whie;">

                                                <li>Skill acquisitions training.</li>
                                                <li>Capacity building and development.</li>
                                                <li>Financial support.</li>
                                                <li>Business Summit/ Seminars.</li>
                                                <li>Provision of shelter.</li>
                                                <li>Provision of clothing.</li>


                                        </p>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div> <!-- end container -->
                </section>
                <!-- end important-causes -->




@include('incs.newsletter')

@endsection
