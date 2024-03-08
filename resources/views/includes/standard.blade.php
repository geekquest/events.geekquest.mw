
    @if ($event->form_id == 1)
        <div class="form-group">
            <label for="email">Full Name:</label>
            <input type="text" class="form-control"
                placeholder="Enter name" id="email">
        </div>
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control"
                placeholder="Enter email" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Phone Number:</label>
            <input type="number" class="form-control"
                placeholder="Enter phone number" id="pwd">
        </div>
    @elseif($event->form_id == 2)
    <div class="form-group">
        <label for="email">Full Name:</label>
        <input type="text" class="form-control" placeholder="Enter name" id="email">
      </div>
    <div class="form-group">
      <label for="email">Email address:</label>
      <input type="email" class="form-control" placeholder="Enter email" id="email">
    </div>
    <div class="form-group">
      <label for="pwd">Phone Number:</label>
      <input type="number" class="form-control" placeholder="Enter phone number" id="pwd">
    </div>
    <div class="form-group">
        <label for="pwd">Organization/Company:</label>
        <input type="text" class="form-control" placeholder="Enter your organization/company name" id="pwd">
      </div>
      <div class="form-group">
        <label for="pwd">Position:</label>
        <input type="text" class="form-control" placeholder="Enter your position" id="pwd">
      </div>
      @else

      <button>ADD REGISTRATION</button>
    @endif



