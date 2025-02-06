<!doctype html>
<html lang="en">

<head>
    <title>Testimonials | Admin </title>
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
                                <h4 class="mb-sm-0 font-size-18">{{ isset($testimonial) ? 'Update' : 'Add' }} Testimonials</h4>

                                <div class="page-title-right">
                                    <a href="/admin/testimonials" class="btn btn-warning">Back</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card p-4">
                                <!-- Nav tabs -->

                                <form action="{{ isset($testimonial) ? route('admin.testimonials.update', $testimonial->id) : route('admin.testimonials.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Enter Name</label>
                                                <input type="text" class="form-control" id="formrow-firstname-input"
                                                    placeholder="Enter Name" name="name" value="{{ isset($testimonial) ? $testimonial->name : '' }}" required>
                                                    <input type="hidden" name="id" value="{{ $testimonial->id ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-password-input" class="form-label">Comment</label>
                                                <textarea class="form-control" name="testimonial" id="" placeholder="Write Comment..." required>{{ isset($testimonial) ? $testimonial->testimonial : '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary w-md">{{ isset($testimonial) ? 'Update' : 'Submit' }}</button>
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
    @include('admin.includes.foot')
</body>

</html>
