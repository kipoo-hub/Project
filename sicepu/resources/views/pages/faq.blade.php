<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FAQ - Sicepu</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    @extends('layouts.app')

    @section('content')
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-4">Frequently Asked Questions</h1>
            <p class="mb-0">Find answers to the most common questions about our services.</p>
        </div>

        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is Sicepu?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Sicepu is a platform for citizens to submit complaints and aspirations regarding public services.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How can I submit a complaint?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can submit a complaint through our <a href="{{ url('/lapor') }}">reporting page</a>.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Is my report anonymous?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, you can choose to submit your report anonymously if you prefer.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        How can I check the status of my report?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        You can check the status of your report on our <a href="{{ url('/status-laporan') }}">status page</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>