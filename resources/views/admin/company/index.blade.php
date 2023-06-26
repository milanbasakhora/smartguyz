<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Company Profile</h5>
                @if (empty($company))
                <a href="{{route('company.create')}}" class="btn btn-primary">Create</a>
                @endif
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th class="border border-1">Name</th>
                        <th class="border border-1">Address</th>
                        <th class="border border-1">Contact</th>
                        <th class="border border-1">Email</th>
                        <th class="border border-1">Logo</th>
                        <th class="border border-1">Action</th>
                    </tr>
                    <tr>
                        @if (!empty($company))
                        {{-- {{ $company }} --}}
                        <td class="border border-1">{{$company->name}}</td>
                        <td class="border border-1">{{$company->address}}</td>
                        <td class="border border-1">{{$company->contact}}</td>
                        <td class="border border-1">{{$company->email}}</td>
                        <td class="border border-1">
                            <img src="{{asset($company->logo)}}" width="60" alt="">
                        </td>
                        <td class="border border-1">
                            <form action="{{route('company.destroy',$company->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <a href="{{route('company.edit',$company->id)}}" class="btn btn-primary">Edit</a>
                            <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                        @endif
                    </tr>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
