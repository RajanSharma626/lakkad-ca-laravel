<!doctype html>
<html lang="en">

<head>
    <title>FAQs | Admin </title>
    @include('admin.includes.head')

</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        @include('admin.includes.header')

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.includes.sidebar')
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">FAQs List</h4>

                                <div class="page-title-right">
                                    <a href="add-faq" class="btn btn-primary">+ Add</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card p-3">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade active show" id="v-pills-gen-ques" role="tabpanel"
                                        aria-labelledby="v-pills-gen-ques-tab">

                                        @foreach ( $faqs as $faq )
                                        
                                        <div class="faq-box d-flex mb-4">
                                            <div class="flex-shrink-0 me-3 faq-icon">
                                                <i class="bx bx-help-circle font-size-20 text-success"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="font-size-15">{{ $faq->question }}</h5>
                                                <p class="text-muted">{{$faq->answer}}.</p>
                                                    
                                                    <div class="mt-2">
                                                        <a href="edit-faq" class="btn btn-sm btn-primary">Edit</a>
                                                        <a href="faqs/delete/{{$faq->id}}" class="btn btn-sm btn-danger">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            @include('admin.includes.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

</body>

</html>
