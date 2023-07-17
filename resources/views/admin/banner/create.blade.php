<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Banner Images</h5>
                <a href="{{ route('banner.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('banner.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="about">About Us Page</label>
                                <input type="file" id="about" class="form-control-file" name="about">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="team">Team Page</label>
                                <input type="file" id="team" class="form-control-file" name="team">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="blog">Blog Page</label>
                                <input type="file" id="blog" class="form-control-file" name="blog">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="contact">Contact Page</label>
                                <input type="file" id="contact" class="form-control-file" name="contact">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="gallery">Gallery Page</label>
                                <input type="file" id="gallery" class="form-control-file" name="gallery">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="notice">Notices Page</label>
                                <input type="file" id="notice" class="form-control-file" name="notice">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="editorial">Editorial Team Page</label>
                                <input type="file" id="editorial" class="form-control-file" name="editorial">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="members">Members Page</label>
                                <input type="file" id="members" class="form-control-file" name="members">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="terms">Terms and Conditions Page</label>
                                <input type="file" id="terms" class="form-control-file" name="terms">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="privacy">Privacy Page</label>
                                <input type="file" id="privacy" class="form-control-file" name="privacy">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Save Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
