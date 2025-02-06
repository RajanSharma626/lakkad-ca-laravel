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
                                <h4 class="mb-sm-0 font-size-18">Testimonials List</h4>

                                <div class="page-title-right">
                                    <a href="add-testimonials" class="btn btn-primary">+ Add</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- Nav tabs -->

                                <!-- Tab panes -->
                                <div class="tab-content p-4">
                                    <div class="tab-pane active" id="all-post" role="tabpanel">
                                        <div>
                                            <div class="row justify-content-center">
                                                <div class="col-12">
                                                    <hr class="mb-4">
                                                    <div class="row">

                                                        @foreach ($testimonials as $testimonial)
                                                            <div class="col-lg-4">
                                                                <div class="card border p-3 h-100">
                                                                    <h5><a href="blog-details.html" class="text-dark">
                                                                            {{ $testimonial->name }}
                                                                        </a></h5>
                                                                    <p class="text-muted">
                                                                        {{ $testimonial->created_at->diffForHumans() }}
                                                                    </p>

                                                                    <p>
                                                                        {{ $testimonial->testimonial }}
                                                                    </p>

                                                                    <div>
                                                                        <a href="edit-testimonials/{{ $testimonial->id }}"
                                                                            class="btn btn-sm btn-primary">Edit <i
                                                                                class="mdi mdi-arrow-right"></i></a>
                                                                        <a href="/admin/testimonials/delete/{{ $testimonial->id }}"
                                                                            class="btn btn-sm btn-danger">Delete <i
                                                                                class="mdi mdi-arrow-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
    @include('admin.includes.foot')
</body>

</html>
