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
                {{-- <div class="bs-docs-example wow fadeInUp animated" data-wow-delay=".5s">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Service Image</th>
                                <th>Package Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $key => $service)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
            <td>
                <img src="{{ asset($service->image) }}" alt="{{ $service->name }}"
                    style="width:100px; height:100px; object-fit:cover">
            </td>
            <td>{{ $service->name }}</td>
            <td>{{ $service->description }}</td>
            <td>Rp.{{ number_format($service->price) }}</td>
            <td>
                @guest
                <a href="{{ route('login') }}" class="btn btn-default">Book Services</a>
                @else
                <a href="{{ route('booking.create', $service->id) }}" class="btn btn-default">Book
                    Services</a>
                @endguest
            </td>
            </tr>
            @endforeach
            </tbody>
            </table>
        </div>
        <div class="clearfix"> </div> --}}


                <div class="mt-5 row">
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
