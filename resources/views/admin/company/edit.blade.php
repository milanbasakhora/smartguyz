<x-admin-layout>
    <div class="container text-white" style="padding-top: 100px">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Company Profile</h5>
                <a href="{{ route('company.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('company.update', $company->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Company Name <span class="text-danger">*</span></label>
                                <input type="text" id="name" class="form-control" value="{{ $company->name }}"
                                    name="name" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Company Address <span class="text-danger">*</span></label>
                                <input type="text" id="address" class="form-control"
                                    value="{{ $company->address }}" name="address" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="contact">Company Contact <span class="text-danger">*</span></label>
                                <input type="text" id="contact" class="form-control"
                                    value="{{ $company->contact }}" name="contact" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Company Email <span class="text-danger">*</span></label>
                                <input type="text" id="email" class="form-control" value="{{ $company->email }}"
                                    name="email" required>
                            </div>
                        </div>
                        <div class="row m-1">
                            <div class="col-md-12">
                                <h6>Social Sites(Optional)</h6>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="facebook">Facebook</label>
                                    <input id="facebook" class="form-control" type="text" name="facebook"
                                        placeholder="https://facebook.com/SmartGuyz" value="{{ $company->facebook }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="instagram">Instagram</label>
                                    <input id="instagram" class="form-control" type="text" name="instagram"
                                        placeholder="https://instagram.com/SmartGuyz"
                                        value="{{ $company->instagram }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tiktok">Tiktok</label>
                                    <input id="tiktok" class="form-control" type="text" name="tiktok"
                                        placeholder="https://tiktok.com/SmartGuyz" value="{{ $company->tiktok }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="youtube">Youtube</label>
                                    <input id="youtube" class="form-control" type="text" name="youtube"
                                        placeholder="https://youtube.com/SmartGuyz" value="{{ $company->youtube }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="twitter">Twitter</label>
                                    <input id="twitter" class="form-control" type="text" name="twitter"
                                        placeholder="https://twitter.com/SmartGuyz" value="{{ $company->twitter }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="logo">Company Logo</label>
                                <input type="file" id="logo" class="form-control-file" name="logo">
                            </div>
                        </div>
                        <div>
                            <h6>Previous Logo</h6>
                            <img src="{{ asset($company->logo) }}" width="120" alt="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
