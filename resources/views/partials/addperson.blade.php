<!-- Form row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">Add New Person</h4>
                
                <form method="POST" action="{{ url('/add/person') }}">
                    @csrf

                    @if(count($errors)>0)

                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{ $error }}
                        </div>
                        @endforeach

                    @endif
                   
                    <div class="form-group">
                        <label for="firstname" class="col-form-label">{{ __('Firstname') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="Firstname" name="firstname"  required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="surname" class="col-form-label">{{ __('Surname') }}</label>
                        <input type="text" class="form-control" id="name" placeholder="Surname" name="surname"  required >
                    </div>

                     <div class="form-group">
                        <label for="dob" class="col-form-label">{{ __('Surname') }}</label>
                        <input type="date" class="form-control" id="dob" placeholder="Date of birth" name="dob"  required >
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('Save Details') }}</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end row -->
