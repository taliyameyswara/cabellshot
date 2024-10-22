@extends('layouts.app')

@section('styles')
    <style>
        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .table-hover tbody tr:hover {
            background-color: #f5f5f5;
        }

        .img-responsive {
            border-radius: 5px;
        }

        .table-bordered {
            border: 2px solid #ddd;
        }

        .table thead {
            background-color: #f8f9fa;
        }

        .btn-default {
            background-color: #007bff;
            color: white;
            border-radius: 5px;
        }

        .btn-default:hover {
            background-color: #0056b3;
            color: white;
        }
    </style>
@endsection

@section('content')
    <div class="banner jarallax">
        <div class="agileinfo-dot">
            @include('layouts.header')
            <div class="wthree-heading">
                <h2 style="color: white">Services</h2>
            </div>
        </div>
    </div>
    <div class="about-top">
        <div class="container">
            <div class="wthree-services-bottom-grids">
                <p class="wow fadeInUp animated" data-wow-delay=".5s">List of services provided by us.</p>



                <div class="row mt-5">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Sport</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Wedding</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Event</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
