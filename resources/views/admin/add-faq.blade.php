<!doctype html>
<html lang="en">

<head>
    <title>Add Testimonials | Admin </title>
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
                                <h4 class="mb-sm-0 font-size-18">Add FAQs</h4>

                                <div class="page-title-right">
                                    <a href="faqs" class="btn btn-warning">Back</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card p-4">
                                <!-- Nav tabs -->

                                <form action="{{ route('admin.faq.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-password-input" class="form-label">Quetion ?</label>
                                                <textarea class="form-control" name="question" placeholder="Write Quetion..." required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-password-input" class="form-label">Answer</label>
                                                <textarea class="form-control" name="answer"  placeholder="Write answer..." required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                                    </div>
                                </form>


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
