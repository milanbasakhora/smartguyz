<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Jumbotron</h5>
                <a href="{{route('jumbotron.index')}}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('jumbotron.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="text1">First Text <span class="text-danger">*</span></label>
                            <input type="text" id="text1" class="form-control" name="text1" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="text2">Second Text <span class="text-danger">*</span></label>
                            <input type="text" id="text2" class="form-control" name="text2" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="text3">Third Text <span class="text-danger">*</span></label>
                            <input type="text" id="text3" class="form-control" name="text3" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="bgimage">Background Image <span class="text-danger">*</span></label>
                            <input type="file" id="bgimage" class="form-control" name="bgimage" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save Record</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
