<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Company Profile</h5>
                @if (empty($company))
                    <a href="{{ route('company.create') }}" class="btn btn-primary">Create</a>
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
                            <td class="border border-1">{{ $company->name }}</td>
                            <td class="border border-1">{{ $company->address }}</td>
                            <td class="border border-1">{{ $company->contact }}</td>
                            <td class="border border-1">{{ $company->email }}</td>
                            <td class="border border-1">
                                <img src="{{ asset($company->logo) }}" width="60" alt="">
                            </td>
                            <td class="border border-1">
                                <form action="{{ route('company.destroy', $company->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('company.edit', $company->id) }}" class="btn btn-primary">Edit</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                </table>
            </div>
            <div class="card-body d-flex justify-content-end">
                @if (!empty($company->facebook))
                    <a href="{{ $company->facebook }}" target="_blank" class="mx-1 text-primary-emphasis"><i
                            class="fa-brands fa-xl fa-square-facebook"></i></a>
                @endif
                @if (!empty($company->instagram))
                    <a href="{{ $company->instagram }}" target="_blank" class="mx-1 text-danger-emphasis"><i
                            class="fa-brands fa-xl fa-square-instagram"></i></a>
                @endif
                @if (!empty($company->tiktok))
                    <a href="{{ $company->tiktok }}" target="_blank" class="mx-1 text-dark"><i
                            class="fa-brands fa-xl fa-tiktok"></i></a>
                @endif
                @if (!empty($company->twitter))
                    <a href="{{ $company->twitter }}" target="_blank" class="mx-1 text-info"><i
                            class="fa-brands fa-xl fa-twitter"></i></a>
                @endif
                @if (!empty($company->youtube))
                    <a href="{{ $company->youtube }}" target="_blank" class="mx-1 text-danger"><i
                            class="fa-brands fa-xl fa-youtube"></i></a>
                @endif
            </div>
        </div>
    </div>
</x-admin-layout>
