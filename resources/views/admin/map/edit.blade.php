<x-admin-layout>
    <div class="container text-white" style="padding-top: 100px">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Update Map Location</h5>
                <a href="{{ route('map.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('map.update', $map->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="latitude">Latitude <span class="text-danger">*</span></label>
                                <input type="text" id="latitude" class="form-control" value="{{ $map->latitude }}"
                                    name="latitude" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="longitude">Longitude <span class="text-danger">*</span></label>
                                <input type="text" id="longitude" class="form-control"
                                    value="{{ $map->longitude }}" name="longitude" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="zoomlevel">Zoom Level <span class="text-danger">*</span></label>
                                <input type="text" id="zoomlevel" class="form-control"
                                    value="{{ $map->zoomlevel }}" name="zoomlevel" required>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
