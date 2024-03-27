@extends('layouts.admin')
@section('content')
    @role('admin')
        {{-- <div class="white_shd full margin_bottom_30" style="margin-top:60px;padding:20px;">
             <button type="button" class="btn bg-primary cur-p btn-primary" data-toggle="modal" data-target="#myModal">Add
                Event</button>
        </div> --}}
        <div class="white_shd full margin_bottom_30" style="margin-top:60px;padding:20px;">
            <div class="full graph_head">
                <div class="heading1 margin_0">
                    <h2>List of Suggested Guest</h2>
                </div>
            </div>
            <div class="table_section padding_infor_info">
                <div class="table-responsive-sm">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Message</th>
                                {{-- <th>Action</th> --}}

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($allguest as $event)
                                <tr>
                                    <td>{{ $event->gname }}</td>
                                    <td> {{ $event->gemail }}
                                    </td>
                                    <td>{{ $event->gmobile }}</td>
                                    <td>{{ $event->gmessage }}</td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endrole
@endsection

