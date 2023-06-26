<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Welcome Message</h5>
                <a href="{{route('welcome_message.index')}}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('welcome_message.update',$welcome_message->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" id="title" class="form-control" value="{{ $welcome_message->title }}" name="title" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Description <span class="text-danger">*</span></label>
                            <textarea name="description" id="description" class="form-control summernote">{{ $welcome_message->description }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" id="image" class="form-control-file" value="" name="image">
                        </div>
                    </div>
                    <div>
                        <h6>Previous Image</h6>
                        <img src="{{asset($welcome_message->image)}}" width="120" alt="">
                    </div>

                </div>
                <button type="submit" class="btn btn-success m-3">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
