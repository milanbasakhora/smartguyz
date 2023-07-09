<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Company Profile</h5>
                <a href="{{route('company.index')}}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('company.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Company Name <span class="text-danger">*</span></label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="address">Company Address <span class="text-danger">*</span></label>
                            <input type="text" id="address" class="form-control" name="address" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="contact">Company Contact <span class="text-danger">*</span></label>
                            <input type="text" id="contact" class="form-control" name="contact" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="email">Company Email <span class="text-danger">*</span></label>
                            <input type="text" id="email" class="form-control" name="email" required>
                        </div>
                    </div>
                    <div class="row m-2">
                        <div class="col-md-12">
                            <h6>Social Sites(Optional)</h6>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input id="facebook" class="form-control" type="text" name="facebook"
                                    placeholder="https://facebook.com/SmartGuyz" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="instagram">Instagram</label>
                                <input id="instagram" class="form-control" type="text" name="instagram"
                                    placeholder="https://instagram.com/SmartGuyz">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tiktok">Tiktok</label>
                                <input id="tiktok" class="form-control" type="text" name="tiktok"
                                    placeholder="https://tiktok.com/SmartGuyz">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="youtube">Youtube</label>
                                <input id="youtube" class="form-control" type="text" name="youtube"
                                    placeholder="https://youtube.com/SmartGuyz">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input id="twitter" class="form-control" type="text" name="twitter"
                                    placeholder="https://twitter.com/SmartGuyz">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="logo">Company Logo</label>
                                <input type="file" id="logo" class="form-control-file" name="logo">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save Record</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
