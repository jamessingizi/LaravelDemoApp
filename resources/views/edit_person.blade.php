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

                         @include('partials.editperson')
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

    </body>
</html>