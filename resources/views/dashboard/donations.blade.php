@extends('dashboard.layouts.base')

@section('content')

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Donnations
                            <small>All donaitons to Zeareal Care Foundation</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i data-feather="home"></i>
                            </a>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <form class="form-inline search-form search-box">
                    <div class="form-group">
                        <input class="form-control-plaintext" type="search" placeholder="Search.."><span
                            class="d-sm-none mobile-search"><i data-feather="search"></i></span>
                    </div>
                </form>

                {{-- <a href="create-user.html" class="btn btn-primary mt-md-0 mt-2">Create User</a> --}}
            </div>

            <div class="card-body">
                <div class="table-responsive table-desi">
                    <table class="all-package coupon-table table table-striped">
                        <thead>
                            <tr>
                                {{-- <th>
                                    <button type="button"
                                        class="btn btn-primary add-row delete_all">Delete</button>
                                </th> --}}
                                {{-- <th>Avtar</th> --}}
                                <th>Fullname</th>

                                <th>Email</th>
                                <th>Last Login</th>
                                <th>Role</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($donations as $donation)

                            <tr data-row-id="1">
                                {{-- <td>
                                    <input class="checkbox_animated check-it" type="checkbox" value=""
                                        id="flexCheckDefault" data-id="1">
                                </td> --}}

                                {{-- <td>
                                    <img src="assets/images/dashboard/user.jpg" alt="">
                                </td> --}}



                                <td>Torres</td>

                                <td>Rowan.torres@gmail.com</td>

                                <td>6 Days ago</td>

                                <td>Customer</td>
                            </tr>
                            @endforeach




                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>

@endsection
