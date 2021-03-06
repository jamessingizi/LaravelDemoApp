<!-- Form row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Edit Person Details</h4>
                
                <form method="POST" action="{{ url('/person/edit') }}">
                    @csrf

                    @if(count($errors)>0)

                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                        @endforeach

                    @endif

                     <input type="hidden" value="{{ $personId }}" name="person_id">
                   
                    <div class="form-group">
                        <label for="firstname" class="col-form-label">{{ __('Firstname') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="Firstname" name="firstname" value="{{ $person[0]->firstname }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="surname" class="col-form-label">{{ __('Surname') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="Surname" name="surname" value="{{ $person[0]->surname }}" required >
                    </div>

                     <div class="form-group">
                        <label for="dob" class="col-form-label">{{ __('Surname') }}</label>
                        <input type="date" class="form-control" id="dob" placeholder="Date of birth" name="dob" value="{{ $person[0]->dob }}" required >
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('Update Person Details') }}</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end row -->
