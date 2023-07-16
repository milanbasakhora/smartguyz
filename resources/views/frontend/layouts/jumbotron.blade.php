<div class="page-hero bg-image overlay-dark" style="background-image: url({{ $jumbotron->bgimage }});">
    <div class="hero-section">
        <div class="container text-center wow zoomIn">
            <span class="subhead" style="">{{ $jumbotron->text1 ?? 'Lets Change The World For Better' }}</span>
            <h1 class="display-4" style="">{{ $jumbotron->text2 ?? 'Smart Campaingn' }}</h1>
            <a onclick="gotoFormSection('pagesection')" class="gotoFormSection btn btn-primary">{{ $jumbotron->text3 ?? 'Join Us' }}</a>
        </div>
    </div>
</div>
