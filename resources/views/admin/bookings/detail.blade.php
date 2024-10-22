@extends('layouts.admin')

@section('content')
    <main id="main-container">
        <div class="content">
            <h2 class="content-heading">View Booking</h2>
            <div class="row">
                <div class="col-md-12">
                    <div class="block block-themed">
                        <div class="block-header bg-gd-emerald">
                            <h3 class="block-title">View Booking</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option"
                                    data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <table class="table table-bordered table-striped table-vcenter">
                                <tr>
                                    <th colspan="5" style="text-align: center;font-size: 20px;color: blue;">Booking
                                        Number: {{ $booking->booking_number }}</th>
                                </tr>
                                <tr>
                                    <th>Client Name</th>
                                    <td>{{ $booking->user->name }}</td>
                                    <th>Mobile Number</th>
                                    <td>{{ $booking->user->phone_number }}</td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $booking->user->email }}</td>
                                    <th>Booking From</th>
                                    <td>{{ $booking->booking_from }}</td>
                                </tr>
                                <tr>
                                    <th>Booking To</th>
                                    <td>{{ $booking->booking_to }}</td>
                                    <th>Number of Guest</th>
                                    <td>{{ $booking->Numberofguest }}</td>
                                </tr>
                                <tr>
                                    <th>State</th>
                                    <td>{{ $booking->state->state_title }}</td>
                                    <th>City</th>
                                    <td>{{ $booking->cityName }}</td>
                                </tr>
                                <tr>
                                    <th>Event Type</th>
                                    <td>{{ $booking->EventType }}</td>
                                    <th>Message</th>
                                    <td>{{ $booking->Message }}</td>
                                </tr>
                                <tr>
                                    <th>Service Name</th>
                                    <td>{{ $booking->service->ServiceName }}</td>
                                    <th>Service Description</th>
                                    <td>{{ $booking->service->SerDes }}</td>
                                </tr>
                                <tr>
                                    <th>Service Price</th>
                                    <td>${{ $booking->service->ServicePrice }}</td>
                                    <th>Apply Date</th>
                                    <td>{{ $booking->BookingDate }}</td>
                                </tr>
                                <tr>
                                    <th>Order Final Status</th>
                                    <td class="font-w600">
                                        @if ($booking->Status == '')
                                            <span class="badge badge-warning">No Processed yet</span>
                                        @elseif($booking->Status == 'Approved')
                                            <span class="badge badge-success">{{ $booking->Status }}</span>
                                        @elseif($booking->Status == 'Cancelled')
                                            <span class="badge badge-danger">{{ $booking->Status }}</span>
                                        @endif
                                    </td>
                                    <th>Admin Remark</th>
                                    <td>{{ $booking->Remark ?: 'Not Updated Yet' }}</td>
                                </tr>
                            </table>

                            @if ($booking->Status == '')
                                <p align="center" style="padding-top: 20px">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Take
                                        Action</button>
                                </p>
                            @endif

                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Take Action</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="{{ route('bookings.update', $booking->id) }}">
                                                @csrf
                                                <table class="table table-bordered table-hover">
                                                    <tr>
                                                        <th>Remark :</th>
                                                        <td>
                                                            <textarea name="remark" placeholder="Remark" rows="5" class="form-control" required></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Status :</th>
                                                        <td>
                                                            <select name="status" class="form-control" required>
                                                                <option value="Approved" selected>Approved</option>
                                                                <option value="Cancelled">Cancelled</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
