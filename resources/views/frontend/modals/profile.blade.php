<!-- Edit Profile Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <button type="button" class="close" id="closeProfileModal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="p-4">
                            <h1 class="text-center fg-primary">Your Profile</h1>
                            @include('frontend.partials.updatepassword')
                            @include('frontend.partials.updatepassword')
                            @include('frontend.partials.deleteprofile')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
