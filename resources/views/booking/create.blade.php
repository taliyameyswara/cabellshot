@extends('layouts.app')

@section('content')
    <div class="banner jarallax">
        <div class="agileinfo-dot">
            @include('layouts.header')
            <div class="wthree-heading">
                <h2 style="color: white">Book Service</h2>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="agile-contact-form">
                <div class="col-md-6 contact-form-right">
                    <div class="contact-form-top">
                        <h3>Book Services</h3>
                    </div>
                    <div class="agileinfo-contact-form-grid">
                        <form action="{{ route('booking.store', $service->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Booking Date:</label>
                                <div class="col-md-10">
                                    <input type="date" class="form-control" name="booking_from" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Type of Event:</label>
                                <div class="col-md-10">
                                    <select class="form-control" name="event_type_id" required>
                                        <option value="">Choose Event Type</option>
                                        @foreach ($eventTypes as $eventType)
                                            <option value="{{ $eventType->id }}">{{ $eventType->type }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Number of Guests:</label>
                                <div class="col-md-10">
                                    <input type="number" class="form-control" name="number_of_guest" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">State:</label>
                                <div class="col-md-10">
                                    <select class="form-control" id="state-dropdown" name="state_id" required>
                                        <option value="">Choose State</option>
                                        @foreach ($states as $state)
                                            <option value="{{ $state->id }}">{{ $state->title }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('state_id'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('state_id') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">City:</label>
                                <div class="col-md-10">
                                    <select class="form-control" id="city-dropdown" name="city_name" required>
                                        <option value="" selected>Choose city</option>
                                    </select>
                                    @if ($errors->has('city_name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('city_name') }}
                                        </div>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Venue and Details:</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="message" required></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Upload Payment Proof:</label>
                                <div class="col-md-10">
                                    <input type="file" class="form-control" name="payment_proof" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-10">
                                    <input type="submit" class="btn btn-primary" value="Book Now">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#state-dropdown').change(function() {
                var stateId = $(this).val();
                console.log('State ID Selected:', stateId);

                if (stateId) {
                    $.ajax({
                        url: '{{ route('cities') }}',
                        type: 'GET',
                        data: {
                            state_id: stateId
                        },
                        success: function(data) {
                            console.log('Cities Data:', data);
                            $('#city-dropdown').empty();
                            $('#city-dropdown').append(
                                '<option value="" selected>Choose city</option>');
                            $.each(data, function(id, name) {
                                $('#city-dropdown').append('<option value="' + name +
                                    '">' + name + '</option>');
                            });
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error('AJAX Error:', textStatus, errorThrown);
                        }
                    });

                } else {
                    $('#city-dropdown').empty();
                    $('#city-dropdown').append('<option value="" selected>Choose city</option>');
                }
            });
        });
    </script>
@endsection
