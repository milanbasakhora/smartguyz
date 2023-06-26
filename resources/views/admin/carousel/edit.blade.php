<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Edit Carousel</h5>
                <a href="{{route('carousel.index')}}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('carousel.update',$carousel->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="image">Update Image</label>
                            <input type="file" id="image" class="form-control-file" value="" name="image">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h6>Previous Image</h6>
                        <img src="{{asset($carousel->image)}}" width="120" alt="">
                    </div>

                </div>
                <button type="submit" class="btn btn-success m-3">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
