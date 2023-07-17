<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Banner Images</h5>
                @if (empty($banner))
                    <a href="{{ route('banner.create') }}" class="btn btn-primary">Create</a>
                @endif
            </div>
            <div class="card-body">
                @if (!empty($banner))
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <h6>About Us</h6>
                            <div class="container">
                                <img src="{{ asset($banner->about) }}" width="120" class="img-fluid m-4"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <h6>Team</h6>
                            <div class="container">
                                <img src="{{ asset($banner->team) }}" width="120" class="img-fluid m-4"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <h6>Blog</h6>
                            <div class="container">
                                <img src="{{ asset($banner->blog) }}" width="120" class="img-fluid m-4"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <h6>Contact</h6>
                            <div class="container">
                                <img src="{{ asset($banner->contact) }}" width="120" class="img-fluid m-4"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <h6>Gallery</h6>
                            <div class="container">
                                <img src="{{ asset($banner->gallery) }}" width="120" class="img-fluid m-4"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <h6>Notices</h6>
                            <div class="container">
                                <img src="{{ asset($banner->notice) }}" width="120" class="img-fluid m-4"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <h6>Editorial Team</h6>
                            <div class="container">
                                <img src="{{ asset($banner->editorial) }}" width="120" class="img-fluid m-4"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <h6>Members</h6>
                            <div class="container">
                                <img src="{{ asset($banner->members) }}" width="120" class="img-fluid m-4"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <h6>Terms and Conditions</h6>
                            <div class="container">
                                <img src="{{ asset($banner->terms) }}" width="120" class="img-fluid m-4"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <h6>Privacy</h6>
                            <div class="container">
                                <img src="{{ asset($banner->privacy) }}" width="120" class="img-fluid m-4"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('banner.destroy', $banner->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ route('banner.edit', $banner->id) }}" class="btn btn-primary">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                @else
                    <h6>No Banner Images</h6>
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>
