@extends('layouts.admin')
@section('content')

    <div class="white_shd full margin_bottom_30" style="margin-top:50px;">

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
                            @foreach ($data as $registration)
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
                            @foreach ($data as $registration)
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

@endsection
