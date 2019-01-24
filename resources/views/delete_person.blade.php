<!DOCTYPE html>
<html>
     @include('partials.head')

    <body>

        <!-- Begin page -->
        <div id="wrapper">

                <!-- Start Page content -->
                <div style="margin-top: 70px;">
                    <div class="row" style="margin-bottom: 20px;">
                         <div class="offset-lg-4" style="text-align: center;">
                            <h3>Are you sure you want to delete {{ ucwords($person[0]->firstname." ".$person[0]->surname) }}?</h3>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>

                         <form method="POST" action="{{ url('/person/purge') }}">
                            @csrf
                            <input type="hidden" value="{{ $personId }}" name="person_id">
                
                            <div class="row">
                                <!-- <div class="col-lg-5">&nbsp;</div> -->
                                <div class="col-lg-1 offset-lg-5">
                                    <button type="submit" class="btn btn-lg btn-primary">{{ __('Delete') }}</button>
                                </div>
                                 <div class="col-lg-1">
                                     
                                    <a href="/" class="btn btn-lg btn-primary" id="cancel">{{ __('Cancel') }}</a>
                                 </div>
                                 <div class="col-lg-5">&nbsp;</div>
                            </div>
                            
                        </form>

                </div> <!-- content -->

                 @include('partials.footer')

        </div>
        <!-- END wrapper -->

         @include('partials.scripts')

    </body>
</html>