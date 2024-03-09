@if ($event->form_id == 1)
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
    <form action="{{ route('event.save') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{ $event->id }}" id="">
        <div class="form-group">
            <label for="sel1">Registration Form:</label>
            <select required name="form_id" class="form-control" id="sel1">
                <option>Choose Form</option>
                @foreach ($forms as $form)
                    <option value="{{ $form->id }}">{{ $form->title }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary bg-primary" type="submit">ADD REGISTRATION</button>
    </form>
@endif
