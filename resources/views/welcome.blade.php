

@extends('layouts.main')
@section('content')


    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner">
        <div class="counter-content">
            <ul>
                <li>Days<span id="days_{{ $event->id }}"></span></li>
                <li>Hours<span id="hours_{{ $event->id }}"></span></li>
                <li>Minutes<span id="minutes_{{ $event->id }}"></span></li>
                <li>Seconds<span id="seconds_{{ $event->id }}"></span></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-content">
                        {{-- <div class="next-show">
                            <i class="fa fa-arrow-up"></i>
                            <span>Next Show</span>
                        </div> --}}
                        <h6>Opening on Thursday, March 31st</h6>
                        <h2>{{ $event->topic }}</h2>
                        <div class="main-white-button">
                            <a href="{{  route('events.registration',$event)  }}">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- *** Owl Carousel Items ***-->
    <div class="show-events-carousel">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-show-events owl-carousel">
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-01.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-02.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-03.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-04.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-01.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-02.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-03.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="event-details.html"><img src="assets/images/show-events-04.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- *** Amazing Venus ***-->
    {{-- <div class="amazing-venues">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="left-content">
                        <h4>Three Amazing Venues for events</h4>
                        <p>ArtXibition Event Template is brought to you by Tooplate website and it included total 7 HTML pages.
                        These are <a href="index.html">Homepage</a>, <a href="about.html">About</a>,
                        <a href="rent-venue.html">Rent a venue</a>, <a href="shows-events.html">shows &amp; events</a>,
                        <a href="event-details.html">event details</a>, <a href="tickets.html">tickets</a>, and <a href="ticket-details.html">ticket details</a>.
                        You can feel free to modify any page as you like. If you have any question, please visit our <a href="https://www.tooplate.com/contact" target="_blank">Contact page</a>.</p>
                        <br>
                        <p>You can use this event template for your commercial or business website. You are not permitted to redistribute this template ZIP file on any template download website. If you need the latest HTML templates, you may visit <a href="https://www.toocss.com/" target="_blank">Too CSS</a> website that features a great collection of templates in different categories.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-content">
                        <h5><i class="fa fa-map-marker"></i> Visit Us</h5>
                        <span>5 College St NW, <br>Norcross, GA 30071<br>United States</span>
                        <div class="text-button"><a href="show-events-details.html">Need Directions? <i class="fa fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


    <!-- *** Map ***-->
    {{-- <div class="map-image">
        <img src="assets/images/map-image.jpg" alt="Maps of 3 Venues">
    </div> --}}


    <!-- *** Venues & Tickets ***-->
    <div class="venue-tickets">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Venues & Tickets</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="venue-item">
                        <div class="thumb">
                            <img src="assets/images/venue-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <div class="left-content">
                                <div class="main-white-button">
                                    <a href="ticket-details.html">Purchase Tickets</a>
                                </div>
                            </div>
                            <div class="right-content">
                                <h4>Radio City Musical Hall</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur vinzi iscing elit, sed doers kontra.</p>
                                <ul>
                                    <li><i class="fa fa-sitemap"></i>250</li>
                                    <li><i class="fa fa-user"></i>500</li>
                                </ul>
                                <div class="price">
                                    <span>1 ticket<br>from <em>$45</em></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="venue-item">
                        <div class="thumb">
                            <img src="assets/images/venue-02.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <div class="left-content">
                                <div class="main-white-button">
                                    <a href="ticket-details.html">Purchase Tickets</a>
                                </div>
                            </div>
                            <div class="right-content">
                                <h4>Madison Square Garden</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur vinzi iscing elit, sed doers kontra.</p>
                                <ul>
                                    <li><i class="fa fa-sitemap"></i>450</li>
                                    <li><i class="fa fa-user"></i>650</li>
                                </ul>
                                <div class="price">
                                    <span>1 ticket<br>from <em>$55</em></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="venue-item">
                        <div class="thumb">
                            <img src="assets/images/venue-03.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <div class="left-content">
                                <div class="main-white-button">
                                    <a href="ticket-details.html">Purchase Tickets</a>
                                </div>
                            </div>
                            <div class="right-content">
                                <h4>Royce Hall</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur vinzi iscing elit, sed doers kontra.</p>
                                <ul>
                                    <li><i class="fa fa-sitemap"></i>450</li>
                                    <li><i class="fa fa-user"></i>750</li>
                                </ul>
                                <div class="price">
                                    <span>1 ticket<br>from <em>$65</em></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- *** Coming Events ***-->
    <div class="coming-events">
        <div class="left-button">
            <div class="main-white-button">
                <a href="shows-events.html">Discover More</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="thumb">
                            <a href="event-details.html"><img src="assets/images/event-01.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                            <a href="event-details.html"><h4>Radio City Musical Hall</h4></a>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Tuesday: 15:30-19:30</li>
                                <li><i class="fa fa-map-marker"></i> Copacabana Beach, Rio de Janeiro</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="thumb">
                            <a href="event-details.html"><img src="assets/images/event-02.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                            <a href="event-details.html"><h4>Madison Square Garden</h4></a>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Wednesday: 08:00-14:00</li>
                                <li><i class="fa fa-map-marker"></i> Copacabana Beach, Rio de Janeiro</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-item">
                        <div class="thumb">
                            <a href="event-details.html"><img src="assets/images/event-03.jpg" alt=""></a>
                        </div>
                        <div class="down-content">
                            <a href="event-details.html"><h4>Royce Hall</h4></a>
                            <ul>
                                <li><i class="fa fa-clock-o"></i> Thursday: 09:00-23:00</li>
                                <li><i class="fa fa-map-marker"></i> Copacabana Beach, Rio de Janeiro</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- *** Subscribe *** -->
    {{-- <div class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Subscribe Our Newsletter:</h4>
                </div>
                <div class="col-lg-8">
                    <form id="subscribe" action="" method="get">
                        <div class="row">
                          <div class="col-lg-9">
                            <fieldset>
                              <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-3">
                            <fieldset>
                              <button type="submit" id="form-submit" class="main-dark-button">Submit</button>
                            </fieldset>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
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
