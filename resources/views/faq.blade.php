<!DOCTYPE html>
<html lang="en">

<head>
    <x-head title="Contact Us | Lakkad Consultancy" />
</head>

<body>
    <!--=====Header start=======-->
    <x-navbar />
    <!--=====Header end=======-->

    <!--=====Mobile header start=======-->
    <x-mobile-navbar />
    <!--=====Mobile header end=======-->


    <!--=====Inner hero Start=======-->
    <div class="inner-1 bg-13" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="inner-title text-center">
                        <p>FAQs</p>
                        <h2>Questions & Answers</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====Inner hero end=======-->

    <!--=====Faq start=======-->
    <div class="faq-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="faq-items" id="masonry-grid">
                        <div class="mesonry-item general single-price-list">
                            <div class="faqs inner-faq">
                                <div id="general">

                                    @foreach ($faqs as $faq)
                                        <div class="single-faq">
                                            <h2 class="faq-heading font-f-3 weight-700" id="faq-heading{{ $loop->index }}"
                                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->index }}" aria-expanded="{{ $loop->first ? true : false }}"
                                                aria-controls="collapse{{ $loop->index }}">
                                                {{ $faq->question }}
                                            </h2>
                                            <div id="collapse{{ $loop->index }}" class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                                aria-labelledby="faq-heading{{ $loop->index }}" data-bs-parent="#general">
                                                <p class="font-f-3 weight-500">
                                                    {{ $faq->answer }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="faq-notic">
                    <h4>
                        If you still have other questions, please visit our
                        <a href="/contact-us">Contact Us</a> for get help.
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <!--=====Faq end=======-->

    <!--=====Contact Form Start=======-->
    <div class="main-contact-form section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="heading2 mr20">
                        <small class="heading-top inner-heading-top"><img src="assets/img/icons/hands.svg"
                                alt="" />Contact us</small>
                        <h2>Let’s Work Together</h2>
                        {{-- <p>
                            Share your vision for your next projects with us now. Please
                            contact us for basic questions. we’re here to help!
                        </p> --}}

                        <img src="{{ asset('assets/img/contact/contact-us.webp') }}" alt=""
                            class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="main-form">
                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <!-- Static Inputs -->
                                <div class="col-lg-6 mb-3 mb-3">
                                    <input type="text" class="form-control" name="fname"
                                        placeholder="First Name" value="{{ old('fname') }}" required />
                                    @error('fname')
                                        <div class="text-danger fs-6">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-3 mb-3">
                                    <input type="text" class="form-control" name="lname"
                                        placeholder="Last Name" value="{{ old('lname') }}" required />
                                    @error('lname')
                                        <div class="text-danger fs-6">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 mb-3 mb-3">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Email Address" value="{{ old('email') }}" required />
                                    @error('email')
                                        <div class="text-danger fs-6">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-lg-12 mb-3 mb-3">
                                    <input type="number" class="form-control" name="number"
                                        placeholder="Phone no." value="{{ old('number') }}" required />
                                    @error('number')
                                        <div class="text-danger fs-6">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Dynamic Inputs based on purpose -->
                                <div class="col-lg-12 mb-3 mb-3">
                                    <label for="">Purpose<span class="text-danger">*</span></label> <br>
                                    <input type="radio" name="purpose" value="Enquiry" id="enquiry"
                                        onchange="toggleInputs(this.value)"
                                        {{ old('purpose') == 'Enquiry' ? 'checked' : '' }}>
                                    <label for="enquiry" class="fs-6">Enquiry</label> &nbsp;&nbsp;
                                    <input type="radio" name="purpose" value="Feedback" id="feedback"
                                        onchange="toggleInputs(this.value)"
                                        {{ old('purpose') == 'Feedback' ? 'checked' : '' }}>
                                    <label for="feedback" class="fs-6">Feedback</label>&nbsp;&nbsp;
                                    <input type="radio" name="purpose" value="Job Application" id="jobApplication"
                                        onchange="toggleInputs(this.value)"
                                        {{ old('purpose') == 'Job Application' ? 'checked' : '' }}>
                                    <label for="jobApplication" class="fs-6">Job Application</label>&nbsp;&nbsp;
                                    <input type="radio" name="purpose" value="Suggestions" id="suggestions"
                                        onchange="toggleInputs(this.value)"
                                        {{ old('purpose') == 'Suggestions' ? 'checked' : '' }}>
                                    <label for="suggestions" class="fs-6">Suggestions</label>
                                    @error('purpose')
                                        <div class="text-danger fs-6">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Placeholder for dynamic inputs -->
                                <div class="col-12 row mb-3" id="dynamicInputs"></div>

                                <div class="col-12 mb-3">
                                    <textarea name="message" class="form-control" cols="30" rows="5"
                                        placeholder="Tell Us About Your Projects">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="text-danger fs-6">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="full-btn theme-btn-2">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====Contact Form End=======-->


    <!--=====Subscribe start=======-->
    <div class="subscribe2 bg7 section-padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading2 white-heading no-margin-heading">
                        <small class="heading-top"><img src="assets/img/icons/hands.svg" alt="">We Are Here
                            For Your Tax
                            Relief.</small>
                        <h2>Join Us today and let us help <span class="heilight-right">you</span> <br> to grow your
                            business.</h2>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 offset-lg-1">
                    <div class="sunscribe-form">
                        <div class="subscribe-from-wrap">
                            <form action="#">
                                <input type="email" placeholder="Email Address">
                                <button type="submit" name="button">Subscribe Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====Subscribe end=======-->



    <!--=====Footer start=======-->
    <x-footer />
    <!--=====Footer end=======-->
    <x-foot />

    <script>
        function toggleInputs(value) {
            const dynamicInputs = document.getElementById('dynamicInputs');
            dynamicInputs.innerHTML = ''; // Clear previous inputs

            if (value === 'Enquiry') {
                dynamicInputs.innerHTML = `
                <div class="col-12 mb-3">
                <input type="text" class="form-control" name="investment" placeholder="Investment in INR" value="{{ old('investment') }}" required />
                @error('investment')
                    <div class="text-danger fs-6">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-12">
                <input type="text" class="form-control" name="city" placeholder="City" value="{{ old('city') }}" required />
                @error('city')
                    <div class="text-danger fs-6">{{ $message }}</div>
                @enderror
                </div>
            `;
            } else if (value === 'Feedback') {
                dynamicInputs.innerHTML = `
                <div class="col-12 mb-3">
                <input type="text" class="form-control" name="firm_name" placeholder="Firm Name" value="{{ old('firm_name') }}" required />
                @error('firm_name')
                    <div class="text-danger fs-6">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-6 mb-3">
                <input type="text" class="form-control" name="crm_first_name" placeholder="CRM First Name" value="{{ old('crm_first_name') }}" required />
                @error('crm_first_name')
                    <div class="text-danger fs-6">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-6 mb-3">
                <input type="text" class="form-control" name="crm_last_name" placeholder="CRM Last Name" value="{{ old('crm_last_name') }}" required />
                @error('crm_last_name')
                    <div class="text-danger fs-6">{{ $message }}</div>
                @enderror
                </div>
                <div class="col-12 mb-3">
                <label for="rating" class="fs-5">CRM Rating:</label>
                <input type="number" class="form-control" name="crm_rating" placeholder="Rating (1-5)" value="{{ old('crm_rating') }}" min="1" max="5" required />
                @error('crm_rating')
                    <div class="text-danger fs-6">{{ $message }}</div>
                @enderror
                </div>
            `;
            } else if (value === 'Job Application') {
                dynamicInputs.innerHTML = `
                <div class="col-12 mb-3">
                <label for="resume" class="fs-5">Upload Resume:</label>
                <input type="file" class="form-control" name="resume" accept=".pdf" required />
                @error('resume')
                    <div class="text-danger fs-6">{{ $message }}</div>
                @enderror
                </div>
            `;
            }
            // Suggestions selected, dynamic inputs are cleared (default behavior)
        }

        // Trigger the function on page load if there's an old value
        document.addEventListener('DOMContentLoaded', function() {
            const oldPurpose = "{{ old('purpose') }}";
            if (oldPurpose) {
                toggleInputs(oldPurpose);
            }
        });
    </script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        </script>
    @endif

</body>


</html>
