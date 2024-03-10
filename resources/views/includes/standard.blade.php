@if ($event->form_id == 1)
    <input type="hidden" name="event_id" value="{{ $event->id }}">
    <div class="form-group">
        <label for="namme">Full Name:</label>
        <input required type="text" class="form-control" placeholder="Enter name" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input required type="email" class="form-control" name="email" placeholder="Enter email" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Phone Number:</label>
        <input required type="number" class="form-control" name="phone" placeholder="Enter phone number"
            id="pwd">
    </div>
    <label for="pwd">Gender:</label>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="1" name="gender">Male
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="2" name="gender">Female
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="3" name="gender">Them
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input"value="4" name="gender">Prefer not to say
        </label>
    </div>
@elseif($event->form_id == 2)
    <input type="hidden" name="event_id" value="{{ $event->id }}">

    <div class="form-group">
        <label for="name">Full Name:</label>
        <input required type="text" class="form-control" name="name" placeholder="Enter name" id="name">
    </div>
    <div class="form-group">
        <label for="email">Email address:</label>
        <input required type="email" class="form-control" name="email" placeholder="Enter email" id="email">
    </div>
    <div class="form-group">
        <label for="pwd">Phone Number:</label>
        <input required type="number" class="form-control" name="phone" placeholder="Enter phone number" id="pwd">
    </div>
    <div class="form-group">
        <label for="pwd">Organization/Company:</label>
        <input required type="text" class="form-control" name="company" placeholder="Enter your organization/company name"
            id="pwd">
    </div>
    <div class="form-group">
        <label for="pwd">Position:</label>
        <input  required type="text" class="form-control" name="position" placeholder="Enter your position" id="pwd">
    </div>
    <label for="pwd">Gender:</label>

    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="1" name="gender">Male
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="2" name="gender">Female
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input" value="3" name="gender">Them
        </label>
    </div>
    <div class="form-check">
        <label class="form-check-label">
            <input type="radio" class="form-check-input"value="4" name="gender">Prefer not to say
        </label>
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
