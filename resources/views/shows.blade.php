

@extends('layouts.main')
@section('content')
    <!-- *** Venues & Tickets ***-->
    <div class="venue-tickets">
        <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Discover More</h2>


                    <div class="text-center">
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="text" required placeholder="search here..........." class="form-control" name="" style="width:50%" id="">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary bg-primary">Search</button>
                        </form>
                    </div>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Discover More</h2>
                    </div>
                </div>
                @foreach ($threevents as $threevet)
                <div class="col-lg-4">
                    <div class="venue-item">
                        <div class="thumb">
                            <img src="{{ asset('storage/' . $threevet->image) }}" alt="">
                        </div>
                        <div class="down-content">
                            <div class="left-content">
                                <div class="main-white-button">
                                    <a href="{{  route('events.registration',$threevet)  }}">Register</a>
                                </div>
                            </div>
                            <div class="right-content">
                                <h4>{{ $threevet->topic }}</h4>
                                <p>
                                    {{ $threevet->message }}
                                </p>
                                {{-- <ul>
                                    <li><i class="fa fa-sitemap"></i>250</li>
                                    <li><i class="fa fa-user"></i>500</li>
                                </ul>
                                <div class="price">
                                    <span>1 ticket<br>from <em>$45</em></span>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </div>
    @endsection

    @section('scripts')

@endsection
