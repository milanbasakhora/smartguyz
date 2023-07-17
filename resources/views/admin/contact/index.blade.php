<x-admin-layout>
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h5>Messages</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                            <th class="border border-1">SN</th>
                            <th class="border border-1">Name</th>
                            <th class="border border-1">Email</th>
                            <th class="border border-1">Subject</th>
                            <th class="border border-1">Message</th>
                            <th class="border border-1">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $index => $contact)
                            <tr>
                                <td class="border border-1">{{ ++$index }}</td>
                                <td class="border border-1">{{ $contact->name }}</td>
                                <td class="border border-1">{{ $contact->email }}</td>
                                <td class="border border-1">{{ $contact->subject }}</td>
                                <td class="border border-1">{{ $contact->message }}</td>
                                <td class="border border-1">
                                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST" class="delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm text-white" onclick="return confirm('Are you sure you want to delete this contact?')">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
