@extends('layouts.admin')
@section('content')
    <!-- dashboard inner -->
    <div class="midde_cont" style="margin-top:40px;">
        <div class="container-fluid">

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
                                        <form action="{{ route('events.update', $event->slug) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group">
                                                <label for="email">Title:</label>
                                                <input type="text" class="form-control" value="{{ $event->topic }}" placeholder="Enter Title"
                                                    name="topic" id="email">
                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">Flyer:</label>
                                                <input type="file" name="image" onchange="previewImage(this)">
                                                <img id="preview" src="#" alt="Preview Image"
                                                    style="display: none; max-width: 200px; max-height: 200px;">

                                            </div>
                                            <div class="form-group">
                                                <label for="pwd">Description:</label>
                                                <textarea name="message" class="form-control" cols="30" rows="5" maxlength="500"
                                                    oninput="updateCharacterCount(this)">

                                                {{ $event->message }}
                                                </textarea>
                                                <span id="characterCount">500</span> characters remaining
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Venue:</label>

                                                <input type="text" value="{{ $event->venue }}" class="form-control" placeholder="Enter venue"
                                                    name="venue" id="email">
                                            </div>
                                            <div class="d-flex justify-content-between ">

                                                <div class="form-group">
                                                    <label for="email">Date:</label>
                                                    <input type="date" class="form-control" name="date" id="email" value="{{ $event->date }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="email">Time:</label>
                                                    <input type="time" class="form-control" value="{{ $event->time }}" name="time"
                                                        id="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="sel1">Duration:</label>
                                                    <select name="duration" class="form-control" id="sel1">
                                                        <option value="0">Choose Duration</option>
                                                        <option {{ $event->duration == $event->duration ? 'selected' : '' }}>1 hour</option>
                                                        <option >2 hours</option>
                                                        <option >3 hours</option>
                                                        <option >4 hours</option>
                                                        <option >5 hours</option>
                                                    </select>
                                                </div>
                                            </div>



                                        @if ($event->form_id == 0)
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
                                        @else
                                        <div id="registrationForm" >
                                            <div class="form-group">
                                                <label for="sel1">Registration Form:</label>
                                                <select name="form_id" class="form-control" id="sel1">

                                                    <option value="0">Remove Registration Form</option>

                                                    @foreach ($forms as $form)
                                                        <option value="{{ $form->id }}"  {{ $form->id == $event->form_id ? 'selected' : '' }}>{{ $form->title }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @endif
                                            <button type="submit" style="width:100%;margin-top:5px;"
                                                class="btn bg-primary btn-primary">Update {{ $event->topic }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
        <!-- end dashboard inner -->
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
