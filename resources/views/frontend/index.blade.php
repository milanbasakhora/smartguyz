<!DOCTYPE html>
<html lang="en">

<head>
    {{-- CSS --}}
    @include('frontend.layouts.css')
</head>

<body>
    @include('sweetalert::alert')

    @if ($checknotice->isNotEmpty()) {{-- Check if $checknotice is not empty --}}
    <div class="modal bd-example-modal-lg" id="popModel" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                @php
                    $count = 0;
                @endphp
                @foreach ($checknotice as $notice) {{-- Loop through $checknotice --}}
                    @if ($notice->expire_date > now()->format('Y-m-d'))
                        @if ($count == 0)
                            <img src="{{ asset($notice->image) }}" alt="">
                            @php
                                $count = 1;
                            @endphp
                        @endif
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endif


<!-- Back to top button -->
<div class="back-to-top"></div>

<!-- Navbar -->
@include('frontend.layouts.navbar')

<!-- Jumbotron -->
@include('frontend.layouts.jumbotron')

<!-- Welcome Message -->
@include('frontend.layouts.welcomemessage')

<!-- Board Members -->
@include('frontend.layouts.boardmembers')

<!-- Activities -->
@include('frontend.layouts.activities')

<!-- Members -->
@include('frontend.layouts.members')

<!-- Member Request -->
@include('frontend.layouts.memberrequest')

<!-- Footer -->
@include('frontend.layouts.footer')

{{-- Javascript --}}
@include('frontend.layouts.js')

</body>

</html>
