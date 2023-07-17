<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Map Location</h5>
                <a href="{{route('map.index')}}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('map.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="latitude">Latitude <span class="text-danger">*</span></label>
                            <input type="text" id="latitude" class="form-control" name="latitude" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="longitude">Longitude <span class="text-danger">*</span></label>
                            <input type="text" id="longitude" class="form-control" name="longitude" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="zoomlevel">Zoom Level <span class="text-danger">*</span></label>
                            <input type="text" id="zoomlevel" class="form-control" name="zoomlevel" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save Record</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
