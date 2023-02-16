@extends("layout.app")
@section("content")

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Erreur !</strong>Les valeurs que vous avez rentré ne sont pas valides<br><br>
        <br />
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
        <form aid="contactForm" method="post" action="{{ route('contact.store') }}">
            @csrf
            <div class="mb-3">
                <div class="row mt-3">
                    <div class="form-group col-6">
                        <label>Nom</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name" id="name" required>
                    </div>
                    <div class="form-group col-6">
                        <label>Prénom</label>
                        <input type="text" class="form-control {{ $errors->has('firstname') ? 'error' : '' }}" name="firstname" id="firstname" required>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="row mt-3">
                    <div class="form-group col-6">
                        <label>Email</label>
                        <input type="email" class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email" id="email" required>
                    </div>
                    <div class="form-group col-6">
                        <label>Numéro de téléphone</label>
                        <input type="text" class="form-control {{ $errors->has('phone') ? 'error' : '' }}" name="phone" id="phone">
                    </div>
                </div>
            </div>
        <div class="mb-3">
            <label>Entreprise</label>
            <input type="text" class="form-control {{ $errors->has('company') ? 'error' : '' }}" name="company" id="company">
        </div>
        <div class="mb-3">
            <label>Motif de la demande</label>
            <input type="text" class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject" id="subject" required>
        </div>
        <div class="mb-3">
            <label>Descritpion de la situation</label>
            <textarea class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message" id="message" rows="4" required></textarea>
        </div>
        <div class="d-grid">
            <input type="submit" name="send" value="Envoyer" class="btn btn-dark btn-block">
        </div>
        </form>
        </div>
    </div>
</div>

@endsection
