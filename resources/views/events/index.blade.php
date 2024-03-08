@extends('layouts.admin')
@section('content')
    <div class="white_shd full margin_bottom_30" style="margin-top:60px;padding:20px;">
        <button type="button" class="btn bg-primary cur-p btn-primary" data-toggle="modal" data-target="#myModal">Add
            Event</button>
    </div>
    <div class="white_shd full margin_bottom_30">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>Events Table</h2>
            </div>
        </div>
        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Topic</th>
                            <th>Image</th>
                            <th>Venue</th>
                            <th>Date</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($events as $event)
                            <tr>
                                <td>{{ $event->topic }}</td>
                                <td> <img src="{{ asset('storage/' . $event->image) }}" alt="image" style="width: 10%" />
                                </td>
                                <td>{{ $event->venue }}</td>
                                <td>{{ $event->date }}</td>
                                <td>
                                    <a class="text-white btn bg-success btn-priamry"
                                        href="{{ route('events.show', $event) }}">Show</a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="myModal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Event</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="email">Title:</label>
                            <input type="text" class="form-control" placeholder="Enter Title" name="topic"
                                id="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Flyer:</label>
                            <input type="file" name="image" onchange="previewImage(this)">
                            <img id="preview" src="#" alt="Preview Image"
                                style="display: none; max-width: 200px; max-height: 200px;">

                        </div>
                        <div class="form-group">
                            <label for="pwd">Content:</label>
                            <textarea name="message" class="form-control" cols="30" rows="5" maxlength="500"
                                oninput="updateCharacterCount(this)"></textarea>
                            <span id="characterCount">500</span> characters remaining
                        </div>
                        <div class="form-group">
                            <label for="email">Venue:</label>
                            <p style="color:red"><strong>Note</strong>: if left Bank we assume ull use TechMw Discord Server
                            </p>
                            <input type="text" class="form-control" placeholder="Enter venue" name="venue"
                                id="email">
                        </div>
                        <div class="d-flex justify-content-between ">

                            <div class="form-group">
                                <label for="email">Date:</label>
                                <input type="date" class="form-control" name="date" id="email">
                            </div>
                            <div class="form-group">
                                <label for="email">Time:</label>
                                <input type="time" class="form-control" name="time" id="email">
                            </div>
                            <div class="form-group">
                                <label for="sel1">Duration:</label>
                                <select name="duration" class="form-control" id="sel1">
                                    <option value="0">Choose Duration</option>
                                    <option>1 hour</option>
                                    <option>2 hours</option>
                                    <option>3 hours</option>
                                    <option>4 hours</option>
                                    <option>5 hours</option>
                                </select>
                            </div>
                        </div>



                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" value=""
                                    id="registrationCheckbox">Require Registration
                            </label>
                        </div>

                        <div id="registrationForm" style="display: none;margin-top:5px;">
                            <div class="form-group">
                                <label for="sel1">Registration Form:</label>
                                <select name="form_id" class="form-control" id="sel1">

                                    <option value="0">Choose Form</option>
                                    @foreach ($forms as $form)
                                        <option value="{{ $form->id }}">{{ $form->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" style="width:100%;margin-top:5px;"
                            class="btn bg-primary btn-primary">Submit</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        const registrationCheckbox = document.getElementById('registrationCheckbox');
        const registrationForm = document.getElementById('registrationForm');

        registrationCheckbox.addEventListener('change', function() {
            if (this.checked) {
                registrationForm.style.display = 'block';
            } else {
                registrationForm.style.display = 'none';
            }
        });
    </script>

    <script>
        const textarea = document.querySelector('textarea');
        const characterCount = document.getElementById('characterCount');

        function updateCharacterCount(element) {
            const remainingCharacters = 500 - element.value.length;
            characterCount.textContent = remainingCharacters;
        }

        textarea.addEventListener('input', function() {
            updateCharacterCount(this);
        });
    </script>
    <script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                    $('#preview').show();
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
