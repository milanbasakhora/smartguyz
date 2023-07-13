<x-admin-layout>
    <div class="container text-white" style="padding-top: 100px">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Jumbotron</h5>
                <a href="{{ route('jumbotron.index') }}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('jumbotron.update', $jumbotron->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="text1">First Text <span class="text-danger">*</span></label>
                                <input type="text" id="text1" class="form-control" value="{{ $jumbotron->text1 }}"
                                    name="text1" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="text2">Second Text <span class="text-danger">*</span></label>
                                <input type="text" id="text2" class="form-control"
                                    value="{{ $jumbotron->text2 }}" name="text2" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="text3">Third Text <span class="text-danger">*</span></label>
                                <input type="text" id="text3" class="form-control"
                                    value="{{ $jumbotron->text3 }}" name="text3" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="bgimage">Background Image</label>
                                <input type="file" id="bgimage" class="form-control-file" name="bgimage">
                            </div>
                        </div>
                        <div>
                            <h6>Previous Image</h6>
                            <img src="{{ asset($jumbotron->bgimage) }}" width="120" alt="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
