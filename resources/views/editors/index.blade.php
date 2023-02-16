@extends("layout.app")
@section("content")

<h1>Liste des pages éditables</h1>

<div class="table-responsive">
    <table class="table align-middle">
        <thead>
            <tr>
                <th scope="col">Nom de la page</th>
                <th scope="col">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($editors as $editor)
                <tr>
                    <td>{{ $editor->page_name }}</td>
                    <td>
                    <a class="btn btn-primary" href="{{ route('editors.edit', $editor->id) }}">Modifier</a>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
