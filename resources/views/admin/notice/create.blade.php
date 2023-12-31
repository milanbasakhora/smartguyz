<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Add Notice</h5>
                <a href="{{ route('notice.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('notice.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" id="title" class="form-control-file" name="title">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="expire_date">Expire Date <span class="text-danger">*</span></label>
                                <input type="date" id="expire_date" class="form-control-file" name="expire_date">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Select Image <span class="text-danger">*</span></label>
                                <input type="file" id="image" class="form-control-file" name="image">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Save Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
