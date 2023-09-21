<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Edit Activity</h5>
                <a href="{{ route('activity.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('activity.update', $activity->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title">Title<span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title"
                                    value="{{ $activity->title }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea id="description" class="form-control summernote" name="description" rows="5">{{ $activity->description }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="image">Update Image</label>
                                <input id="image" class="form-control-file" type="file" name="images[]" multiple
                                    placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="meta_word">Meta Word</label>
                                <textarea id="meta_word" class="form-control" name="meta_word" rows="5">{{ $activity->meta_word }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="meta_description">Meta Description</label>
                                <textarea id="meta_description" class="form-control" name="meta_description" rows="5">{{ $activity->meta_description }}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary my-2">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
