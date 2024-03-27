

@extends('layouts.main')
@section('content')
    <!-- *** Venues & Tickets ***-->
    <div class="venue-tickets">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-heading">
                        <h2>Recommend a Guest</h2>
  <p> <strong>
    Have someone in mind you'd love to see on our show?
  </strong>
    We want to hear from you! Share your recommendations for potential guests who you believe would bring valuable insights, expertise, or entertainment to our audience. Your suggestions help us shape the future of our content and ensure we feature voices that resonate with our community. Let us know who you think we should interview next!
  </p>

                        <div class="text-center">
                            <form style="margin-top:10px;" action="{{ route('gstore') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    {{-- <label for="name">Guest Name:</label> --}}
                                    <input type="text" class="form-control" name="gname" id="name" placeholder="Enter guest name" required>
                                </div>
                                <div class="form-group">
                                    {{-- <label for="name">Guest Name:</label> --}}
                                    <input type="text" class="form-control" name="gemail" placeholder="Enter guest email" required>
                                </div>   <div class="form-group">
                                    {{-- <label for="name">Guest Email:</label> --}}
                                    <input type="text" class="form-control" name="gmobile" placeholder="Enter guest MobileNumber" required>
                               </div>   {{--  <div class="form-group">

                                    <input type="text" class="form-control" id="name" placeholder="Enter guest name" required>
                                </div> --}}

                                <div class="form-group">
                                    {{-- <label for="name">Description:</label> --}}
                                   <textarea class="form-control" placeholder="Share more description about the guest " name="gmessage" id="" cols="30" rows="10"></textarea>
                                </div>

                                <button type="submit" style="width:50%" class="btn btn-primary bg-primary">Submitt</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="col-lg-12">
                        <div style="padding:10px" class="text-center text-white bg-primary">
                            <h4> Next Event </h4>
                        </div>
                        <div class="venue-item">
                            <div class="thumb">
                                <img src="{{ asset('storage/' . $threevents->image) }}" alt="">
                            </div>
                            <div class="down-content">
                                <div class="left-content">
                                    <div class="main-white-button">
                                        <a href="{{  route('events.registration',$threevents)  }}">Register</a>
                                    </div>
                                </div>
                                <div class="right-content">
                                    <h4>{{ $threevents->topic }}</h4>
                                    <p>
                                        {{ $threevents->message }}
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
                    {{-- @endforeach --}}
                </div>
            </div>



        </div>
    </div>
    @endsection

    @section('scripts')

@endsection
