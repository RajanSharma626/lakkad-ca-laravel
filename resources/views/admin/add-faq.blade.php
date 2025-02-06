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
                                <h4 class="mb-sm-0 font-size-18">{{ isset($faq) ? 'Update' : 'Add' }} FAQs</h4>

                                <div class="page-title-right">
                                    <a href="/admin/faqs" class="btn btn-warning">Back</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card p-4">
                                <!-- Nav tabs -->

                                <form action="{{ isset($faq) ? route('admin.faq.update', $faq->id) : route('admin.faq.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-question-input" class="form-label">Question</label>
                                                <textarea class="form-control" name="question" placeholder="Write Question..." required>{{ isset($faq) ? $faq->question : '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="formrow-answer-input" class="form-label">Answer</label>
                                                <textarea class="form-control" name="answer" placeholder="Write Answer..." required>{{ isset($faq) ? $faq->answer : '' }}</textarea>
                                                <input type="hidden" name="id" value="{{ $faq->id ?? '' }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary w-md">{{ isset($faq) ? 'Update' : 'Submit' }}</button>
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
