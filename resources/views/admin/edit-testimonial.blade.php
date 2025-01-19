<!doctype html>
<html lang="en">

<head>
    <title>Edit Testimonials | Admin </title>
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
                                <h4 class="mb-sm-0 font-size-18">Edit Testimonial</h4>

                                <div class="page-title-right">
                                    <a href="testimonials" class="btn btn-warning">Back</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card p-4">
                                <!-- Nav tabs -->

                                <form action="{{ route('admin.testimonials.update') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Enter
                                                    Name</label>
                                                <input type="text" class="form-control" id="formrow-firstname-input"
                                                    placeholder="Enter Name" value="{{ $testimonial->name }}"
                                                    name="name">
                                                <input type="hidden" name="id" value="{{ $testimonial->id }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-password-input" class="form-label">Comment</label>
                                                <textarea class="form-control" name="testimonial" id="" placeholder="Write Comment...">  {{ $testimonial->testimonial }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary w-md">Update</button>
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
