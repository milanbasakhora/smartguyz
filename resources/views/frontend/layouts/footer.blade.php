<footer class="page-footer">
    <div class="container">
        <div class="row px-md-3">
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Company</h5>
                <ul class="footer-menu">
                    <li><a href="/about">About Us</a></li>
                    <li><a href="/editorial-team">Editorial Team</a></li>
                    <li><a href="/gallery">Gallery</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>More</h5>
                <ul class="footer-menu">
                    <li><a href="/terms-n-conditions">Terms & Condition</a></li>
                    <li><a href="/privacy">Privacy</a></li>
                    <li><a href="/contact">Collaborate with Us</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Our partners</h5>
                <ul class="footer-menu">
                    <li><a href="https://codeit.com.np" target="_blank">CODE IT</a></li>
                    <li><a href="https://raimilan.com.np" target="_blank">Milan Basakhora</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Contact</h5>
                <ul class="footer-menu">
                    <li><a href="#"><i class="mai-location-outline"></i>: {{ $company->address }}</a></li>
                    <li><a href="tel:{{ $company->contact }}"><i class="mai-call-outline"></i>: {{ $company->contact }}</a></li>
                    <li><a href="mailto:{{ $company->email }}"><i class="mai-mail-outline"></i>: {{ $company->email }}</a></li>
                </ul>

                <h5 class="mt-5">Social Media</h5>
                <div class="footer-sosmed mt-3">
                    @if ($company->facebook)
                    <a href="{{ $company->facebook }}" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                    @endif
                    @if ($company->twitter)
                    <a href="{{ $company->twitter }}" target="_blank"><span class="mai-logo-twitter"></span></a>
                    @endif
                    @if ($company->youtube)
                    <a href="{{ $company->youtube }}" target="_blank"><span class="mai-logo-youtube"></span></a>
                    @endif
                    @if ($company->instagram)
                    <a href="{{ $company->instagram }}" target="_blank"><span class="mai-logo-instagram"></span></a>
                    @endif
                </div>
            </div>
        </div>
        <hr>
        <p id="copyright">Copyright &copy; {{ now()->year }} <a href="/">{{ $company->name ?? 'Smart-Guyz' }}</a>.
            All right
            reserved</p>
    </div>
</footer>
