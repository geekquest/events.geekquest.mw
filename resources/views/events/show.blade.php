@extends('layouts.admin')
@section('content')
    <!-- dashboard inner -->
    <div class="midde_cont" style="margin-top:40px;">
        <div class="container-fluid">
            <div class="row column_title">
                <div class="col-md-12">
                    <div class="page_title">
                        {{-- <h2>{{ $event->topic }}</h2> --}}
                        <div class="row">
                            <div class="col-md-6"> <!-- Adjust column size as needed -->
                                <a href="{{ route('events.edit', $event->slug) }}"
                                    class="text-white btn btn-primary bg-primary w-100">Edit</a>
                            </div>
                            <div class="col-md-6"> <!-- Adjust column size as needed -->
                                <form action="{{ route('events.destroy', $event) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-white btn btn-danger bg-danger w-100" type="submit">DELETE</button>
                                </form>
                            </div>
                        </div>



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
                                                        aria-selected="false">Qr Code</a>
                                                    <a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab"
                                                        href="#nav-contact_s2" role="tab"
                                                        aria-controls="nav-contacts_s2" aria-selected="false">Registration
                                                        List</a>
                                                    <a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab"
                                                        href="#nav-cont_s2" role="tab" aria-controls="nav-cont_s2"
                                                        aria-selected="false">Reminders</a>
                                                </div>
                                            </nav>

                                            <div class="tab-content" id="nav-tabContent_2">
                                                <div class="tab-pane fade " id="nav-cont_s2" role="tabpanel"
                                                    aria-labelledby="nav-home-tab">
                                                    <div>
                                                        <form action="{{ route('reminders.store') }}" method="post">
                                                            @csrf
                                                            <input type="text" hidden name="event_id"
                                                                value="{{ $event->id }}">
                                                            <div class="form-group">
                                                                <label>Reminder:</label>
                                                                <select name="time" class="form-control">
                                                                    <option value="0">Choose time</option>
                                                                    <option>5 minute</option>
                                                                    <option>1 hour</option>
                                                                    <option>2 hours</option>
                                                                    <option>12 hours</option>
                                                                    <option>1 week</option>
                                                                    <option>2 week</option>
                                                                    <option>1 Month</option>
                                                                </select>
                                                            </div>

                                                            <button class="btn btn-primary bg-primary" style="width:100%"
                                                                type="submit">Add</button>
                                                        </form>
                                                    </div>
                                                    <div>
                                                        <br>
                                                        <br>
                                                        <h4>Reminder List</h4>
                                                        <br>
                                                        @foreach ($reminders as $reminder)
                                                            <h4> > {{ $reminder->time }}</h4>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade show active" id="nav-home_s2" role="tabpanel"
                                                    aria-labelledby="nav-home-tab">
                                                    @include('includes.standard')
                                                </div>
                                                <div class="tab-pane fade" id="nav-profile_s2" role="tabpanel"
                                                    aria-labelledby="nav-profile-tab">
                                                    @if (\Carbon\Carbon::parse($event->date)->lessThan(\Carbon\Carbon::today()))
                                                        <div class="alert alert-danger">
                                                            <strong>Cant register for past events</strong> .
                                                        </div>
                                                    @else
                                                        <p>

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

                                                            <button class="btn btn-primary bg-primary"
                                                                onclick="myFunctionone()" onmouseout="outFunc()">
                                                                <span class="tooltiptext" id="myTooltipone">Copy Link to
                                                                    Clipboard</button>
                                                        </p>
                                                        </p>
                                                    @endif
                                                </div>
                                                <div class="tab-pane fade" id="nav-contact_s2" role="tabpanel"
                                                    aria-labelledby="nav-contact-tab">
                                                    <div class="table_section padding_infor_info">
                                                        <div class="table-responsive-sm">
                                                            @if ($registration->count() > 0)
                                                                <h4>Total : {{ $registration->count() }}</h4>
                                                                <br>
                                                                <a href="{{ route('events.regtable', $event) }}"
                                                                    class="btn btn-primary btn-sm">See full
                                                                    details</a>
                                                                <br>
                                                                <br>

                                                                <table class="table table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Name</th>
                                                                            {{-- <th>Email</th> --}}
                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($registration as $register)
                                                                            <tr>
                                                                                <td>{{ $register->name }}</td>
                                                                                {{-- <td>{{ $register->email }}</td> --}}
                                                                                <td>
                                                                                    <button class="btn btn-primary"
                                                                                        data-toggle="modal"
                                                                                        data-target="#categoryModal{{ $register->id }}">Show</button>
                                                                                </td>
                                                                            </tr>
                                                                            <!-- edit Modal -->
                                                                            <div class="modal fade"
                                                                                id="categoryModal{{ $register->id }}"
                                                                                tabindex="-1" role="dialog"
                                                                                aria-labelledby="categoryModalLabel{{ $register->id }}"
                                                                                aria-hidden="true">
                                                                                <div class="modal-dialog" role="document">
                                                                                    <div class="modal-content">
                                                                                        <div class="modal-header">
                                                                                            <h5 class="modal-title"
                                                                                                id="categoryModalLabel{{ $register->id }}">
                                                                                                {{ $register->name }}
                                                                                                Details</h5>
                                                                                            <button type="button"
                                                                                                class="close"
                                                                                                data-dismiss="modal"
                                                                                                aria-label="Close">
                                                                                                <span
                                                                                                    aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                        <div class="modal-body">
                                                                                            <h4> <strong>Name</strong>
                                                                                                {{ $register->name }}</h4>
                                                                                            <br>
                                                                                            <h4> <strong>Email</strong>
                                                                                                {{ $register->email }}</h4>
                                                                                            <br>

                                                                                            <h4> <strong>Phone</strong>
                                                                                                {{ $register->phone }}</h4>
                                                                                            <br>

                                                                                        </div>

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach


                                                                    </tbody>
                                                                </table>
                                                            @else
                                                                <div class="alert alert-success">
                                                                    <strong>NO RECORD FOUND</strong> .
                                                                </div>
                                                            @endif


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
