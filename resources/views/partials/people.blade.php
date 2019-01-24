
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <h4 class="header-title mb-3">People Details</h4>

                @if(session('person_added'))

                    <div class="alert alert-success alert-dismissable" style="margin-bottom: 5px;">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button>
                        <strong>{{ session('person_added') }}</strong>
                    </div>
                   
                @endif

                @if(session('person_add_error'))

                    <div class="alert alert-success alert-dismissable" style="margin-bottom: 5px;">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button>
                        <strong>{{ session('person_add_error') }}</strong>
                    </div>
                   
                @endif

                @if(session('person_updated'))

                    <div class="alert alert-success alert-dismissable" style="margin-bottom: 5px;">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button>
                        <strong>{{ session('person_updated') }}</strong>
                    </div>
                   
                @endif

                @if(session('person_deleted'))

                    <div class="alert alert-success alert-dismissable" style="margin-bottom: 5px;">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button>
                        <strong>{{ session('person_deleted') }}</strong>
                    </div>
                   
                @endif

                @if(session('person_error'))

                    <div class="alert alert-warning alert-dismissable" style="margin-bottom: 5px;">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button>
                        <strong>{{ session('person_error') }}</strong>
                    </div>
                   
                @endif

                @if(session('attributes_updated'))

                    <div class="alert alert-success alert-dismissable" style="margin-bottom: 5px;">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button>
                        <strong>{{ session('attributes_updated') }}</strong>
                    </div>
                   
                @endif

                @if(session('attributes_error'))

                    <div class="alert alert-warning alert-dismissable" style="margin-bottom: 5px;">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button>
                        <strong>{{ session('attributes_error') }}</strong>
                    </div>
                   
                @endif

                @if(session('entry_not_found'))

                    <div class="alert alert-warning alert-dismissable" style="margin-bottom: 5px;">
                        <button type="button" class="close" data-dismiss="alert"
                        aria-hidden="true">
                        &times;
                        </button>
                        <strong>{{ session('entry_not_found') }}</strong>
                    </div>
                   
                @endif

                <div class="table-responsive">
                    
                    <table class="table table-hover m-0" id="people-table">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Surname</th>
                                <th>D.O.B</th>
                                <th>Age</th>
                                <th>Created At</th>
                                <th>Action</th>
                                <th>Attributes</th>
                            </tr>
                        </thead>

                       <tbody></tbody>

                    </table>
                </div>
            </div>

        </div>

    </div>