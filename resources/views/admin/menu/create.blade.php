<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Create Menu</h5>
                <a href="{{route('menu.index')}}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('menu.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <input id="position" type="number" value="{{ $menu_id }}" name="position" hidden>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Menu Name <span class="text-danger">*</span></label>
                            <input type="text" id="name" class="form-control" name="name" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Save Record</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
