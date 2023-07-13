<x-admin-layout>
    <div class="container" style="">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Jumbotron</h5>
                @if (empty($jumbotron))
                    <a href="{{ route('jumbotron.create') }}" class="btn btn-primary">Create</a>
                @endif
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th class="border border-1">First Text</th>
                        <th class="border border-1">Second Text</th>
                        <th class="border border-1">Third Text</th>
                        <th class="border border-1">Background Image</th>
                        <th class="border border-1">Action </th>
                    </tr>
                    <tr>
                        @if (!empty($jumbotron))
                            <td class="border border-1">{{ $jumbotron->text1 }}</td>
                            <td class="border border-1">{{ $jumbotron->text2 }}</td>
                            <td class="border border-1">{{ $jumbotron->text3 }}</td>
                            <td class="border border-1">
                                <img src="{{ asset($jumbotron->bgimage) }}" width="60" alt="">
                            </td>
                            <td class="border border-1">
                                <form action="{{ route('jumbotron.destroy', $jumbotron->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{ route('jumbotron.edit', $jumbotron->id) }}" class="btn btn-primary">Edit</a>
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
