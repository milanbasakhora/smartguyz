<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Alter Menu</h5>
                <a href="{{route('menu.index')}}" class="btn btn-primary">Go Back</a>
            </div>
            <div class="card-body">
                <form action="{{route('menu.update',$menu->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="name">Menu Name <span class="text-danger">*</span></label>
                            <input type="text" id="name" class="form-control" name="name" value="{{ $menu->name }}" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="position">Menu Position <span class="text-danger">*</span></label>
                            <input type="number" id="position" class="form-control" name="position" value="{{ $menu->position??0+1 }}" value="{{ $menu->position }}" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Update Record</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
