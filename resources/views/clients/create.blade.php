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

<form action="{{route("clients.store")}}" method="POST">
    @CSRF
    <div class="row">
        <div class="col-12 col-lg-6 offset-0 offset-lg-3">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="inputlast_name"><strong>Nom</strong></label>
                            <input type="text" class="form-control {{ $errors->has('name') ? 'error' : '' }}" id="last_name" name="last_name" required>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-6">
                                <label for="inputfirst_name"><strong>Prénom</strong></label>
                                <input type="text" name="first_name" class="form-control" id="first_name" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="inputphone_number"><strong>Numéro de téléphone</strong></label>
                                <input type="text" name="phone_number" value="" class="form-control" id="phone_number" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="inputemail"><strong>Email</strong></label>
                                <input type="text" name="email" class="form-control" id="email" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="inputBirth_date" class="form-label"><strong>Date de naissance</strong></label>
                                <input type="date" name="birth_date" class="form-control" class="form-control" id="birth_date" required>
                            </div>
                        </div>

                        <div class="form-group col-12">
                            <label for="exampleFormControlSelect1"><strong>Statut professionnel</strong></label>
                            <select class="form-control" name="professionalstatu_id" id="professionalstatu" required>

                                <option value=""></option>

                                @foreach ($professionalstatu as $professionalstat)
                                    <option value="{{$professionalstat->id}}">{{$professionalstat->professionalstatuname}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
                                <a class="btn btn-primary mt-3" href="{{route('clients.index')}}">Retour</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
