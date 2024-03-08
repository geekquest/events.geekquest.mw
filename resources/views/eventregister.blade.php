@extends('layouts.main')
@section('content')
    <!-- ***** About Us Page ***** -->
    <div class="page-heading-rent-venue" style="background-image: url('{{ asset('storage/' . $event->image) }}');">
        {{-- <img src="{{ asset('storage/' . $event->image) }}" alt="image" style="width: 100%" /> --}}

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{ $event->topic }}</h2>
                    <span>{{ $event->message }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="shows-events-schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>{{ $event->topic }}</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="full progress_bar_inner">
                        <div class="row">
                            <div class="">
                                <img src="{{ asset('storage/' . $event->image) }}" alt="image"  style="width: 100%" />
                                <ul style="margin-top:50px;">
                                    <li><i class="fa fa-clock-o"></i>  {{ \Carbon\Carbon::parse($event->date )->format('d F Y') }} -  {{ \Carbon\Carbon::parse($event->time)->format('h:iA') }} to {{ \Carbon\Carbon::parse($event->time_to)->format('h:iA') }}</li>
                                    <li><i class="fa fa-map-marker"></i>  {{ $event->venue }}</li>
                                </ul>


                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Register for this Event</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST">
                                @csrf
                                <x-honeypot />
                                @include('includes.standard')

                                <button style="width:100%" class="btn btn-primary bg-primary"
                                    type="submit">Register</button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
@section('styles')
    <style>
        .page-heading-rent-venue {
            background-size: cover;
            padding: 100px 0;
            color: #fff;
            text-align: center;
        }

        .white_shd {
            background: #fff;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            border-radius: 5px;
            margin-top: 0;
        }
    </style>
@endsection
