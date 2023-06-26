<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Add Category</h5>
                <a href="{{ route('membercategory.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('membercategory.store') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="type">Type <span class="text-danger">*</span></label>
                                <input id="type" class="form-control" type="text" name="type" value="{{ old('type') }}"
                                    placeholder="Board Member" required>
                            </div>
                            @error('type')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
