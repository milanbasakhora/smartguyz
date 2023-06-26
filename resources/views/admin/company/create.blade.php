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
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="logo">Company Logo</label>
                            <input type="file" id="logo" class="form-control-file" name="logo">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save Record</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
