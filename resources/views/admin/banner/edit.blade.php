<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h6>Banner Image Update</h6>
                <a href="{{route('banner.index')}}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('banner.update',$banner->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5 for="about">About Us</h5>
                            <input type="file" id="about" class="form-control-file" name="about">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Previous Image</h6>
                        <img src="{{asset($banner->about)}}" width="120" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5 for="team">Team</h5>
                            <input type="file" id="team" class="form-control-file" name="team">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Previous Image</h6>
                        <img src="{{asset($banner->team)}}" width="120" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5 for="blog">Blog</h5>
                            <input type="file" id="blog" class="form-control-file" name="blog">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Previous Image</h6>
                        <img src="{{asset($banner->blog)}}" width="120" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5 for="contact">Contact</h5>
                            <input type="file" id="contact" class="form-control-file" name="contact">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Previous Image</h6>
                        <img src="{{asset($banner->contact)}}" width="120" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5 for="gallery">Gallery</h5>
                            <input type="file" id="gallery" class="form-control-file" name="gallery">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Previous Image</h6>
                        <img src="{{asset($banner->gallery)}}" width="120" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5 for="notice">Notices</h5>
                            <input type="file" id="notice" class="form-control-file" name="notice">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Previous Image</h6>
                        <img src="{{asset($banner->notice)}}" width="120" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5 for="editorial">Editorial Team</h5>
                            <input type="file" id="editorial" class="form-control-file" name="editorial">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Previous Image</h6>
                        <img src="{{asset($banner->editorial)}}" width="120" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5 for="members">Members</h5>
                            <input type="file" id="members" class="form-control-file" name="members">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Previous Image</h6>
                        <img src="{{asset($banner->members)}}" width="120" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5 for="terms">Terms and Conditions</h5>
                            <input type="file" id="terms" class="form-control-file" name="terms">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Previous Image</h6>
                        <img src="{{asset($banner->terms)}}" width="120" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <h5 for="privacy">Privacy</h5>
                            <input type="file" id="privacy" class="form-control-file" name="privacy">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h6>Previous Image</h6>
                        <img src="{{asset($banner->privacy)}}" width="120" alt="">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success my-3">Update Record</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
