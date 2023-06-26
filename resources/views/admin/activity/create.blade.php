<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Create Activity</h5>
                <a href="{{ route('activity.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('activity.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea id="description" class="form-control summernote" name="description" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Upload Image</label>
                                <input id="image" class="form-control-file" type="file" name="images[]" multiple
                                    placeholder="">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
