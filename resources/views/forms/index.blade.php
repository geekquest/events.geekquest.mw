@extends('layouts.admin')
@section('content')
<div class="white_shd full margin_bottom_30" style="margin-top:60px;padding:20px;">
    <button type="button" class="btn bg-primary cur-p btn-primary" data-toggle="modal" data-target="#myModal">Add Form</button>
</div>
<div class="white_shd full margin_bottom_30" >
    <div class="full graph_head">
       <div class="heading1 margin_0">
          <h2>Forms Section</h2>
       </div>
    </div>
    {{-- <div class="table_section padding_infor_info">
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
    </div> --}}
    <div class="row column1" style="margin-top: 100px;">
        @foreach ($forms as $form)
        <div class="col-md-6 col-lg-4">
            <div class="full white_shd margin_bottom_30">
               <div class="info_people">
                  <div class="p_info_img">
                     <img src="{{ asset('form.png') }}" alt="#">
                  </div>
                  <div class="user_info_cont">
                     <h4>{{ $form->title }} Form</h4>

                  </div>
               </div>
            </div>
         </div>
        @endforeach


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
            <form action="/action_page.php">
                <div class="form-group">
                  <label for="email">Form Name:</label>
                  <input type="text" class="form-control" placeholder="Enter name" id="email">
                </div>

                <button type="submit" class="btn bg-primary btn-primary">Submit</button>
              </form>
        </div>


      </div>
    </div>
  </div>

@endsection
