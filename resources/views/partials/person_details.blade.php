<!-- Form row -->
    <div class="row">
        <div class="col-md-12">
            <div class="card-box">
                <h4 class="m-t-0 header-title">
                    Details for {{ ucwords($person[0]->firstname." ".$person[0]->surname) }}
                </h4>
    
                <form method="POST" action="{{ url('/person/add_attributes') }}" >
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
                        <label for="name" class="col-form-label">{{ __('Height (M)') }}</label>
                        <input type="text" class="form-control" id="height" placeholder="Height" name="height" value="{{ $person[0]->attributes->height ?? '' }}" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="hair_color" class="col-form-label">{{ __('Hair Color') }}</label>
                        <input type="text" class="form-control" id="hair_color" placeholder="Hair Color" name="hair_color" value="{{ $person[0]->attributes->hair_color ?? '' }}" required >
                        
                    </div>

                    <div class="form-group">
                        <label for="weight" class="col-form-label">{{ __('Weight (Kg)') }}</label>
                        <input type="text" class="form-control" id="weight" placeholder="Weight" name="weight" value="{{ $person[0]->attributes->weight ?? '' }}">
                    </div>


                    <button type="submit" class="btn btn-primary">{{ __('Add / Update Attributes') }}</button>
                </form>
            </div>
        </div>
    </div>
    <!-- end row -->

    