@extends("layout.app")

@section("content")
<div class="row mb-3 justify-content-center">
    <div class="col-12 col-md-4 col-lg-4">
        <div class="row">
            <h3>Connexion</h3>
        </div>
        <form class="row g-3" action="{{route("users.loginInput")}}" method="POST">
            @csrf
            <div class="col-12">
                <label for="name" class="form-label">Utilisateur</label>
                <input type="text" class="form-control" id="name" name="name" required autofocus>
            </div>
            <div class="col-12">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-3">Se connecter</button>
            </div>
        </form>
    </div>
</div>
@endsection
