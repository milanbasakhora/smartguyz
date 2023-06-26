<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Members</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($membercategories as $membercategory)
                        <div class="col-md-12">
                            <h6>{{ $membercategory->type }}</h6>
                            <table class="table table-sm table-striped">
                                <tr>
                                    <th class="border border-1">SN</th>
                                    <th class="border border-1">Image</th>
                                    <th class="border border-1">Name<span class="text-danger">*</span></th>
                                    <th class="border border-1">Email<span class="text-danger">*</span></th>
                                    <th class="border border-1">Address<span class="text-danger">*</span></th>
                                    <th class="border border-1">Phone<span class="text-danger">*</span></th>
                                    <th class="border border-1 w-5">Action</th>
                                </tr>

                                @if (count($membercategory->members) > 0)
                                    @foreach ($membercategory->members as $index => $member)
                                        <tr>
                                            {{ $member }}
                                            <td class="border border-1">{{ ++$index }}</td>
                                            <td class="border border-1">
                                                <img src="{{ asset($member->image) }}" width="60" alt="">
                                            </td>
                                            <td class="border border-1">{{ $member->name }}</td>
                                            <td class="border border-1">{{ $member->email }}</td>
                                            <td class="border border-1">{{ $member->address }}</td>
                                            <td class="border border-1">{{ $member->phone }}</td>
                                            <td class="border border-1">
                                                <form action="{{ route('member.destroy', $member->id) }}" class="d-flex"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('member.edit', $member->id) }}" class="btn btn-primary btn-sm m-2"
                                                        data-toggle="modal" data-target="#myModal{{ $member->id }}">
                                                        <i class="fa-regular fa-pen-to-square"></i>
                                                    </a>
                                                    <button type="submit" class="btn btn-danger btn-sm m-2"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                                {{-- Member Update --}}
                                                <div class="modal fade" id="myModal{{ $member->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="myModalLabel">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myModalLabel">Edit Member
                                                                </h4>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close"><span
                                                                        aria-hidden="true">&times;</span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form
                                                                    action="{{ route('member.update', $member->id) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('put')
                                                                    <div class="form-group">
                                                                        <label for="name">Name <span
                                                                                class="text-danger">*</span></label>
                                                                        <input id="name" class="form-control"
                                                                            type="text" name="name"
                                                                            value="{{ $member->name }}" required>

                                                                        <label for="address">Address <span
                                                                                class="text-danger">*</span></label>
                                                                        <input id="address" class="form-control"
                                                                            type="text" name="address"
                                                                            value="{{ $member->address }}" required>

                                                                        <label for="phone">Phone <span
                                                                                class="text-danger">*</span></label>
                                                                        <input id="phone" class="form-control"
                                                                            type="text" name="phone"
                                                                            value="{{ $member->phone }}" required>

                                                                        <label for="email">Email <span
                                                                                class="text-danger">*</span></label>
                                                                        <input id="email" class="form-control"
                                                                            type="text" name="email"
                                                                            value="{{ $member->email }}" required>

                                                                        <label for="image">Update Image </label>
                                                                        <input id="image" class="form-control"
                                                                            type="file" name="image">
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Update
                                                                            changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="border border-1" colspan="6">No Member Added</td>
                                        <td class="border border-1">
                                            <form action="{{ route('membercategory.destroy', $membercategory->id) }}"
                                                method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fa-solid fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endif

                                {{-- Member Store --}}
                                <form action="{{ route('member.store') }}" method="post">
                                    @csrf
                                    <tr>
                                        <input type="text" value="{{ $membercategory->id }}"
                                            name="member_category_id" hidden>
                                        <td class="border border-1" colspan="2">
                                            <input type="file" class="form-control" name="image">
                                        </td>
                                        <td class="border border-1">
                                            <input type="text" class="form-control" placeholder="Full Name"
                                                name="name" required>
                                        </td>
                                        <td class="border border-1">
                                            <input type="text" class="form-control"
                                                placeholder="example@email.com" name="email" required>
                                        </td>

                                        <td class="border border-1">
                                            <input type="text" class="form-control" placeholder="Dharan-11"
                                                name="address" required>
                                        </td>
                                        <td class="border border-1">
                                            <input type="text" class="form-control" placeholder="98XXXXXXXX"
                                                name="phone" required>
                                        </td>

                                        <td class="border border-1">
                                            <button type="submit" class="btn btn-sm btn-success">Save</button>
                                        </td>
                                    </tr>
                                </form>
                            </table>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>

<script>
    $(document).ready(function() {
        $('#myModal').modal('hide'); // Hide the modal by default
        // Show the modal when the button is clicked
        $('.btn-primary').click(function() {
            $('#myModal').modal('show');
        });
    });
</script>
