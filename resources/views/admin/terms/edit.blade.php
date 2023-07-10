<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Terms And Conditions</h5>
                <a href="{{route('terms_and_conditions.index')}}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('terms_and_conditions.update',$terms->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="title">Title <span class="text-danger">*</span></label>
                            <input type="text" id="title" class="form-control" value="{{ $terms->title }}" name="title" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="content">Content <span class="text-danger">*</span></label>
                            <textarea name="content" id="content" class="form-control summernote">{{ $terms->content }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success my-3">Update Record</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
