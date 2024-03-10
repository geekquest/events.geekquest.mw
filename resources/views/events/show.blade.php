@extends('layouts.admin')
@section('content')
    <!-- dashboard inner -->
    <div class="midde_cont" style="margin-top:40px;">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        {{-- <h2>{{ $event->topic }}</h2> --}}

                        <a href="{{ route('events.edit', $event) }}" class="text-white btn btn-primary bg-primary"
                            style="width:20%">Edit</a>
                        <a class="text-white btn btn-danger bg-danger" style="width:20%">Delete</a>

                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row column4 graph">
                <!-- tab style 1 -->
                <div class="col-md-6">
                    <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                            <div class="heading1 margin_0">
                                <h2>{{ $event->topic }} Details</h2>
                            </div>
                        </div>
                        <div class="full inner_elements">
                            <div class="row">
                                <div class="col-md-12">
                                    <img src="{{ asset('storage/' . $event->image) }}" alt="image" style="width: 100%" />
                                    <div class="white_shd full margin_bottom_30">
                                        <div class="full graph_head">
                                            <div class="heading1 margin_0">
                                                <h2>Event Title : {{ $event->topic }} </h2>
                                            </div>
                                        </div>
                                        <div class="full progress_bar_inner">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="msg_list_main">
                                                        <ul class="msg_list">
                                                            <li>
                                                                <span>
                                                                    <span class="name_user">Description</span>
                                                                    <span class="msg_user">{{ $event->message }}</span>
                                                                    {{-- <span class="time_ago">12 min ago</span> --}}
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <span class="name_user">Date</span>
                                                                    <span class="msg_user">
                                                                        {{ \Carbon\Carbon::parse($event->date)->format('d F Y') }}
                                                                    </span>
                                                                    {{-- <span class="time_ago">12 min ago</span> --}}
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <span class="name_user">Time</span>
                                                                    <span
                                                                        class="msg_user">{{ \Carbon\Carbon::parse($event->time)->format('h:iA') }}
                                                                        to
                                                                        {{ \Carbon\Carbon::parse($event->time_to)->format('h:iA') }}</span>
                                                                    <span class="time_ago">{{ $event->duration }}</span>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span>
                                                                    <span class="name_user">Venue</span>
                                                                    <span class="msg_user">{{ $event->venue }}</span>
                                                                    {{-- <span class="time_ago">12 min ago</span> --}}
                                                                </span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab style 2 -->
                <div class="col-md-6">
                    <div class="white_shd full margin_bottom_30">
                        <div class="full graph_head">
                            <div class="heading1 margin_0">
                                <h2>Registration and Links</h2>
                            </div>
                        </div>
                        <div class="full inner_elements">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="tab_style2">
                                        <div class="tabbar padding_infor_info">
                                            <nav>
                                                <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab2" data-toggle="tab"
                                                        href="#nav-home_s2" role="tab" aria-controls="nav-home_s2"
                                                        aria-selected="true">Form</a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab2" data-toggle="tab"
                                                        href="#nav-profile_s2" role="tab" aria-controls="nav-profile_s2"
                                                        aria-selected="false">Qr Code & Link</a>
                                                    <a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab"
                                                        href="#nav-contact_s2" role="tab"
                                                        aria-controls="nav-contacts_s2" aria-selected="false">Registration
                                                        List</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content" id="nav-tabContent_2">
                                                <div class="tab-pane fade show active" id="nav-home_s2" role="tabpanel"
                                                    aria-labelledby="nav-home-tab">
                                                    @include('includes.standard')
                                                </div>
                                                <div class="tab-pane fade" id="nav-profile_s2" role="tabpanel"
                                                    aria-labelledby="nav-profile-tab">
                                                    <p>
                                                        {{-- <img src="{!!$event->topic(QrCode::format('png')->generate('Embed me into an e-mail!'), 'QrCode.png', 'image/png')!!}">
                                                     --}}
                                                        {{-- {!! QrCode::size(100)->generate( route('dashboard') ); !!} --}}
                                                        <img style="width: 100px; filter: brightness(300%);"
                                                            src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(50)->generate(url()->current())) !!}"
                                                            alt="QR Code">
                                                        <br>
                                                        <br>
                                                    <p>

                                                        <input type="text" disabled
                                                            value="{{ route('events.registration', $event) }}"
                                                            style="width:100%" id="myInputone">
                                                        <br>
                                                        <br>

                                                        <button class="btn btn-primary bg-primary" onclick="myFunctionone()"
                                                            onmouseout="outFunc()">
                                                            <span class="tooltiptext" id="myTooltipone">Copy Link to
                                                                Clipboard</button>
                                                    </p>
                                                    </p>
                                                </div>
                                                <div class="tab-pane fade" id="nav-contact_s2" role="tabpanel"
                                                    aria-labelledby="nav-contact-tab">
                                                    <ul>
                                                        @foreach ($registration as $register)
                                                            <li>{{ $register->name }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tab style 3 -->

            </div>
        </div>

    </div>
    <!-- end dashboard inner -->
@endsection
@section('scripts')
    <script>
        function myFunctionone() {
            var copyText = document.getElementById("myInputone");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(copyText.value);

            var tooltip = document.getElementById("myTooltipone");
            tooltip.innerHTML = "text Copied";
        }

        function outFunc() {
            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Copy to clipboard";
        }
    </script>
@endsection
