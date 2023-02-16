@extends("layout.app")
@section("content")

<h1>Clients</h1>

<a href="{{ route('clients.create') }}" class="btn btn-primary mb-2">Ajouter un client</a>

<div class="table-responsive">
    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Numéro de téléphone</th>
                <th scope="col">Email</th>
                <th scope="col">Âge</th>
                <th scope="col">Statut professionnel</th>
                <th scope="col">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <td>{{ $client->last_name }}</td>
                    <td>{{ $client->first_name }}</td>
                    <td>{{ phone($client->phone_number)->formatInternational(); }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->age() }} ans</td>
                    <td>{{ $client->professionalstatu->professionalstatuname ?? 'Statut inconnu' }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('clients.show', $client->id) }}">Afficher</a>
                        <a class="btn btn-primary" href="{{ route('clients.edit', $client->id) }}">Modifier</a>
                        <a class="btn">
                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm_delete()"><span class="bi-trash3-fill"></span></button>
                        </form> </a>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-center">
    <div class="p-2">{!! $clients->links() !!}</div>
</div>

<script type="text/javascript" src="{{ asset('js/clients.js') }}">

@endsection
