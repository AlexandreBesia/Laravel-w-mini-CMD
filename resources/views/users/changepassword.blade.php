@extends("layout.app")
@section("content")

<!-- https://dev.to/shanisingh03/how-to-change-password-in-laravel-9-1fcg -->

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modifier le mot de passe') }}</div>

                <form action="{{ route('users.updatepassword') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="oldPasswordInput" class="form-label">Ancien mot de passe</label>
                            <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput">
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="newPasswordInput" class="form-label">Nouveau mot de passe</label>
                            <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput">
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="confirmNewPasswordInput" class="form-label">Confirmer le mot de passe</label>
                            <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary mt-3">Confirmer</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection