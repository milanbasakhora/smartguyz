<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Create Gallery</h5>
                <a href="{{ route('gallery.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
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
                                <label for="link">Content Link <span class="text-danger">*</span></label>
                                <input id="link" class="form-control" type="text" name="link"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Upload Thumbnail Image</label>
                                <input id="image" class="form-control-file" type="file" name="image"
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
