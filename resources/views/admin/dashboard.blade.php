@extends('layouts.admin')

@section('content')
    <!-- Page Content -->
    <div class="row gutters-tiny invisible" data-toggle="appear">
        <div class="col-6 col-md-4 col-xl-3">
            <a class="block text-center" href="#">
                <div class="block-content ribbon ribbon-bookmark ribbon-crystal ribbon-left bg-gd-dusk">
                    {{-- <div class="ribbon-box">{{ $totalUnreadQueries }}</div> --}}
                    <div class="ribbon-box">1</div>
                    <p class="mt-5">
                        <i class="si si-book-open fa-3x text-white-op"></i>
                    </p>
                    <p class="font-w600 text-white">Total Unread Queries</p>
                </div>
            </a>
        </div>
    </div>
@endsection
