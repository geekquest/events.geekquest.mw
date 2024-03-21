@extends('layouts.admin')
@section('content')

    <div class="white_shd full margin_bottom_30" style="margin-top:50px;">
        <div class="full graph_head">
            <div class="heading1 margin_0">
                <h2>Registrant Table</h2>

                <a  class="btn btn-primary"  href="{{ route('downloadpdf',$evntId) }}">Export PDF</a>
                <a class="btn btn-primary"  href="">Export EXCEL</a>

            </div>
        </div>
        <div class="table_section padding_infor_info">
            <div class="table-responsive-sm">

                @if ($comp == null)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                {{-- <th>Action</th> --}}

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registrations as $registration)
                                <tr>
                                    <td>{{ $registration->name }}</td>
                                    <td>{{ $registration->email }}</td>
                                    <td>{{ $registration->phone }}</td>
                                    <td>
                                        @if ($registration->gender == 1)
                                            Male
                                        @else
                                            Female
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                @elseif ($comp !== null)
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>company/organization</th>
                                <th>Position</th>

                                {{-- <th>Action</th> --}}

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($registrations as $registration)
                            <tr>
                                <td>{{ $registration->name }}</td>
                                <td>{{ $registration->email }}</td>
                                <td>{{ $registration->phone }}</td>
                                <td>
                                    @if ($registration->gender == 1)
                                        Male
                                    @else
                                        Female
                                    @endif
                                </td>
                                <td>{{ $registration->company }}</td>
                                <td>{{ $registration->position }}</td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                @endif



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
