<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Edit Member</h5>
                <a href="{{ route('member.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{ route('member.update', $member->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">Name <span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name" value="{{ $member->name }}"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="email">Email <span class="text-danger">*</span></label>
                                <input id="email" class="form-control" type="text" name="email" value="{{ $member->email }}"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="phone">Phone <span class="text-danger">*</span></label>
                                <input id="phone" class="form-control" type="text" name="phone" value="{{ $member->phone }}"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="address">Address </label>
                                <input id="address" class="form-control" type="text" name="address" value="{{ $member->address }}"
                                    placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-12 pb-3">
                            <label for="collection_id">Status <span class="text-danger">*</span></label>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="status"
                                    class="custom-control-input" value="active" {{ 'active' == $member->status ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customRadioInline1">Active</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="status"
                                    class="custom-control-input" value="inactive" {{ 'inactive' == $member->status ? 'checked' : '' }}>
                                <label class="custom-control-label" for="customRadioInline2">Inactive</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <h6 for="image">Upload Image</h6>
                                <input id="image" class="form-control-file" type="file" name="image"
                                    placeholder="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <h6 for="image">Previous Image</h6>
                                <img src="{{ asset($member->image) }}" width="120" alt="">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update Record</button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
