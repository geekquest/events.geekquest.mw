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
                    <div class="timer">
                        <div class="block-container">
                            <div class="block">
                                <span id="days_{{ $event->id }}"></span>
                                <span class="block-label">Days</span>
                            </div>
                        </div>
                        <div class="block-container">
                            <div class="block">
                                <span id="hours_{{ $event->id }}"></span>
                                <span class="block-label">Hours</span>
                            </div>
                        </div>

                        <div class="block-container">
                            <div class="block">
                                <span id="minutes_{{ $event->id }}"></span>
                                <span class="block-label">Minutes</span>
                            </div>
                        </div>

                        <div class="block-container">
                            <div class="block">
                                <span id="seconds_{{ $event->id }}"></span>
                                <span class="block-label">Seconds</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                <img src="{{ asset('storage/' . $event->image) }}" alt="image" style="width: 100%" />
                                <ul style="margin-top:50px;">
                                    <li><i class="fa fa-clock-o"></i>
                                        {{ \Carbon\Carbon::parse($event->date)->format('d F Y') }} -
                                        {{ \Carbon\Carbon::parse($event->time)->format('h:iA') }} to
                                        {{ \Carbon\Carbon::parse($event->time_to)->format('h:iA') }}</li>
                                    <li><i class="fa fa-map-marker"></i> {{ $event->venue }}</li>
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

        .timer {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #2C2D8D;
            color: white;
            padding: 10px;
            border-radius: 30px;
        }

        .block-container {
            margin: 0 10px;
            /* Add some spacing between containers */
        }

        .block {
            text-align: center;
        }
    </style>
@endsection
@section('scripts')
    <script>
        const countdownDate_{{ $event->id }} = "{{ \Carbon\Carbon::parse($event->date) }}";

        const countdownTimer_{{ $event->id }} = setInterval(function() {
            const now = new Date().getTime();
            const distance = new Date(countdownDate_{{ $event->id }}).getTime() - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("days_{{ $event->id }}").innerHTML = days;
            document.getElementById("hours_{{ $event->id }}").innerHTML = hours;
            document.getElementById("minutes_{{ $event->id }}").innerHTML = minutes;
            document.getElementById("seconds_{{ $event->id }}").innerHTML = seconds;

            // Update other elements similarly

            if (distance < 0) {
                clearInterval(countdownTimer_{{ $event->id }});
                document.getElementById("days_{{ $event->id }}").innerHTML = "0";
                document.getElementById("hours_{{ $event->id }}").innerHTML = "0";
                document.getElementById("minutes_{{ $event->id }}").innerHTML = "0";
                document.getElementById("seconds_{{ $event->id }}").innerHTML = "0";

                // Update other elements similarly
            }

            const secondsBlock = document.getElementById("seconds_{{ $event->id }}").parentNode;
            secondsBlock.classList.add("active");
            setTimeout(function() {
                secondsBlock.classList.remove("active");
            }, 500);
        }, 1000);
    </script>
@endsection
