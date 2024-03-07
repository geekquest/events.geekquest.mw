@extends('layouts.admin')
@section('content')
<div class="white_shd full margin_bottom_30" style="margin-top:60px;padding:20px;">
    <button type="button" class="btn bg-primary cur-p btn-primary" data-toggle="modal" data-target="#myModal">Add Event</button>
</div>
<div class="white_shd full margin_bottom_30" >
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
                   <th>Date</th>
                   <th>Action</th>

                </tr>
             </thead>
             <tbody>
                <tr>
                   <td>John</td>
                   <td>Doe</td>
                   <td>john@example.com</td>
                </tr>
                <tr>
                   <td>Mary</td>
                   <td>Moe</td>
                   <td>mary@example.com</td>
                </tr>
                <tr>
                   <td>July</td>
                   <td>Dooley</td>
                   <td>july@example.com</td>
                </tr>
                <tr>
                   <td>Mary</td>
                   <td>Moe</td>
                   <td>mary@example.com</td>
                </tr>
             </tbody>
          </table>
       </div>
    </div>
 </div>
 <!-- The Modal -->
<div class="modal" id="myModal" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add Event</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>


      </div>
    </div>
  </div>

@endsection
