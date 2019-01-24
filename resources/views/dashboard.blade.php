<!DOCTYPE html>
<html>
     @include('partials.head')

    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
             @include('partials.leftmenu')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                 @include('partials.topbar')
                <!-- Top Bar End -->

                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                         @include('partials.people')
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                 @include('partials.footer')

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

         @include('partials.scripts')

         <script>

            $(document).ready(function(){

                $('#people-table').DataTable({

                    "ajax": "/people",

                    "columns": [
                        {"data": "id"},
                        {"data": "firstname"},
                        {"data": "surname"},
                        {"data": "dob"},
                        {"data": "age"},
                        {"data": "created_at"},
                        {
                            "data": "id",
                            "fnCreatedCell": function(nTd, sData, oData, iRow, iCol){
                                $(nTd).html("<a href='/person/edit/"+oData.id+"'>Edit</a>&nbsp; | &nbsp;<a href='/person/delete/"+oData.id+"'>Delete</a>");
                            }
                        },
                        {
                            "data": "id",
                            "fnCreatedCell": function(nTd, sData, oData, iRow, iCol){
                                $(nTd).html("<a href='/person/"+oData.id+"'>More...</a>");
                            }
                        }
                    ],

                });

            });
        </script>

    </body>
</html>