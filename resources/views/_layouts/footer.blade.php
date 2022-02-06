<!-- Footer -->
<footer class="bg-primary text-white text-center text-md-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                <a class="navbar-brand" href="#">
                    <img src='{{ $companyProfile->path_logo }}' width="30" height="30" alt="Logo">
                </a>

                <p class='fs-6 mt-3'>{!! $companyProfile->address !!}</p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h6 class="text-uppercase fs-5">Contact Us</h6>

                <ul class="list-unstyled mb-0">
                    @if ($companyProfile->phone_1)
                    <li class="mt-1">
                        <a href="#">
                            <i class="bi bi-whatsapp"></i> {{ $companyProfile->phone_1 }}</a>
                    </li> 
                    @endif
                    @if ($companyProfile->phone_2 != '-')
                    <li class="mt-1">
                        <a href="#">
                            <i class="bi bi-whatsapp"></i> {{ $companyProfile->phone_2 }}</a>
                    </li> 
                    @endif
                    
                    <li class="mt-1">
                        <a href="#">
                            <i class="bi bi-envelope"></i> {{ $companyProfile->email }}
                        </a>
                    </li>
                </ul>

                <h6 class="text-uppercase fs-5 mt-2">Follow Us</h6>
                <ul class="list-unstyled mb-0">
                    <li>
                        <i class="bi bi-facebook me-2"></i>
                        <i class="bi bi-instagram me-2"></i>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h6 class="text-uppercase fs-5 mb-0">Links</h6>

                <ul class="list-unstyled">
                    <li class="mt-1">
                        <a href="#!" class="text-white">About</a>
                    </li>
                    <li class="mt-1">
                        <a href="#!" class="text-white">Services</a>
                    </li>
                    <li class="mt-1">
                        <a href="#!" class="text-white">Visi Misi</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2022 Copyright
    </div>
    <!-- Copyright -->
</footer>