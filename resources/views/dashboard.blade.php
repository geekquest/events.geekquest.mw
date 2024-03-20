@extends('layouts.admin')
@section('content')
    @role('admin')
    <div class="midde_cont" style="margin-top:40px;">
        <div class="container-fluid">
           <div class="row column_title">
              <div class="col-md-12">
                 <div class="page_title">
                    <h2>Admins Dashboard</h2>
                 </div>
              </div>
           </div>

        </div>

     </div>
    @else
    <div class="midde_cont" style="margin-top:40px;">
        <div class="container-fluid">
           <div class="row column_title">
              <div class="col-md-12">
                 <div class="page_title">
                    <h2>User Dashboard</h2>
                 </div>
              </div>
           </div>

        </div>

     </div>
    @endrole
    <!-- dashboard inner -->

    <!-- end dashboard inner -->
@endsection
