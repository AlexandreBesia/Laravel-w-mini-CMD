@extends("layout.app")

@section("content")

    <div class="row mb-3 justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="row">
                <h3>Enregistrer un utilisateur</h3>
            </div>
            <form class="row g-3" action="{{route("users.registerInput")}}" method="POST">
                @csrf
                <div class="col-12">
                    <label for="name" class="form-label">Nom d'utilisateur</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Username" required autofocus>
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="col-12">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-secondary">S'enregistrer</button>
                </div>
                <div class="col-12">
                    <a href="{{route("users.login")}}">Vous avez déjà un compte ?</a>
                </div>
            </form>
        </div>
    </div>

@endsection
