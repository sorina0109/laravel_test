@extends('admin.template')

@section('content')

    <main>
        <div class="container-fluid px-4">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('control-panel') }}">Control Panel</a></li>
                <li class="breadcrumb-item active">Mesaje utilizatori</li>
            </ol>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Lista Mesajelor de la utilizatori
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col" >#</th>
                            <th scope="col">Nume</th>
                            <th scope="col">Telefon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Subiect</th>
                            <th scope="col">Mesaj</th>
                            <th scope="col">Data</th>
                            <th scope="col">Actiuni</th>

                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($contacts as $contact)
                            <tr>
                                <td>
                                    {{ $contacts->currentPage() > 1 ? $loop->iteration + $contacts->perPage() * ($contacts->currentPage() - 1) : $loop->iteration }}
                                </td>
                               <td>
                                    {{ $contact->name }}
                                </td>
                                <td>
                                    {{ $contact->phone }}
                                </td>
                                <td>
                                    {{ $contact->email }}
                                </td>
                                <td>
                                    {{ $contact->subject }}
                                </td class="text-center">
                                <td>
                                    {{ $contact->message }}
                                </td class="text-center">
                                <td>
                                    {{ $contact->created_at }}
                                </td>
                                <td>
                                    <form id="form-delete-{{ $contact->id }}"
                                        action="{{ route('contact.delete', $contact->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('delete')

                                    </form>

                                    <button class="btn btn-danger btn-circle btn-sm"
                                        title="Sterge mesajul din baza de date"
                                        onclick=" if(confirm('Confirmati stergerea mesajului de la {{ $contact->name}}?'))
                                         {document.getElementById('form-delete-{{ $contact->id }}').submit(); } ">
                                        <i class="fas fa-2x fa-trash-alt"></i>
                                    </button>

                                </td>
                        @empty
                            <div class="alert alert-info">
                                Nu exista mesaje
                            </div>
                        @endforelse

                    </tbody>
                </table>
                {{-- afisam paginatia --}}
                {{ $contacts->links() }}
            </div>
        </div>
    </div>
</main>


@endsection
@section('customJs')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $('.show_confirm').click(function(e) {
        if(!confirm('Are you sure you want to delete this?')) {
            e.preventDefault();
        }
    });
</script>

@endsection
