<!DOCTYPE html>
<div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="{{ url('/') }}" class="navbar-brand p-0">
                <h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> Sicepu</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-0 mx-lg-auto">
                    <a href="{{ url('/') }}" class="nav-item nav-link active">Home</a>
                    <a href="{{ url('/about') }}" class="nav-item nav-link">About</a>
                    <a href="{{ url('/services') }}" class="nav-item nav-link">Services</a>
                    <a href="{{ url('/blog') }}" class="nav-item nav-link">Blog</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link" data-bs-toggle="dropdown">
                            <span class="dropdown-toggle">Pages</span>
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ url('/feature') }}" class="dropdown-item">Our Features</a>
                            <a href="{{ url('/team') }}" class="dropdown-item">Our Team</a>
                            <a href="{{ url('/faq') }}" class="dropdown-item">FAQs</a>
                            <a href="{{ url('/404') }}" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="{{ url('/contact') }}" class="nav-item nav-link">Contact</a>
                    <div class="nav-btn px-3">
                        <button class="btn-search btn btn-primary btn-md-square rounded-circle flex-shrink-0"
                            data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                        <a href="#" class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0"> Get a Quote</a>
                    </div>
                </div>
            </div>
            <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada"
                    data-wow-delay=".9s">
                    <i class="fa fa-phone-alt fa-2x"></i>
                    <div class="position-absolute" style="top: 7px; right: 12px;">
                        <span><i class="fa fa-comment-dots text-secondary"></i></span>
                    </div>
                </a>
                <div class="d-flex flex-column ms-3">
                    <span>Call to Our Experts</span>
                    <a href="tel:+01234567890"><span class="text-dark">Free : (+62) 822-9270-7434</span></a>
                </div>
            </div>
        </nav>
    </div>
</div>