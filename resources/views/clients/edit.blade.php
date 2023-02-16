@extends("layout.app")
@section("content")

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Erreur !</strong>Les valeurs saisies ne sont pas valides<br><br>
        <br />
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route("clients.update", $client->id)}}" method="POST">
    @CSRF
    @method("PUT")
	<div class="row justify-content-center">
        <div class="col-md-9">
            <div class="row mb-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary mt-3">Modifier</button>
                    <a class="btn btn-primary mt-3" href="{{route('clients.index')}}">Retour</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="inputLast_name"><strong>Nom de famille</strong></label>
							<input type="text" name="last_name" value="{{"$client->last_name"}}" class="form-control" id="last_name">
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-6">
                                <label for="inputFirst_name"><strong>Prénom</strong></label>
								<input type="text" name="first_name" value="{{"$client->first_name"}}" class="form-control" id="first_name">
                            </div>
                            <div class="form-group col-6">
                                <label for="inputPhone_number"><strong>Numéro de téléphone</strong></label>
								<input type="text" name="phone_number" value="{{"$client->phone_number"}}" class="form-control" id="phone_number">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-6">
                                <label for="inputEmail"><strong>Email</strong></label>
								<input type="text" name="email" value="{{"$client->email"}}" class="form-control" id="email">
                            </div>
                            <div class="form-group col-6">
                                <label for="inputBirth_date" class="form-label"><strong>Date de naissance</strong></label>
								<input type="date" name="birth_date" class="form-control" value="{{"$client->birth_date"}}" class="form-control" id="birth_date">
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="exampleFormControlSelect1"><strong>Statut professionnel</strong></label>
                            <select class="form-control" name="professionalstatu_id" id="professionalstatu" required>

                                <option value="">{{$client->professionalstatu->professionalstatuname}}</option>

                                @foreach ($professionalstatu as $professionalstat)
                                    <option value="{{$professionalstat->id}}">{{$professionalstat->professionalstatuname}}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group col-12">
                            <label for="inputType_of_service"><strong>Types de prestations</strong></label>
							<textarea type="text" name="type_of_service" class="form-control" id="type_of_service">{{"$client->type_of_service"}}</textarea>
                        </div>
                        <div class="form-group col-12">
                            <label for="inputDuration_and_date_of_consultation"><strong>Durée et date de la consultation</strong></label>
							<textarea type="text" name="duration_and_date_of_consultation" class="form-control" id="duration_and_date_of_consultation">{{"$client->duration_and_date_of_consultation"}}</textarea>
                        </div>
                        <div class="form-group col-12">
                            <label for="inputDue_date"><strong>Date d’échéance</strong></label>
							<input type="date" name="due_date" value="{{"$client->due_date"}}" class="form-control" id="due_date">
                        </div>
                        <div class="form-group col-12">
                            <label for="inputPersonal_note"><strong>Note personnelle</strong></label>
							<textarea type="text" name="personal_note" class="form-control" id="personal_note">{{"$client->personal_note"}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary mt-3">Modifier</button>
                <a class="btn btn-primary mt-3" href="{{route('clients.index')}}">Retour</a>
            </div>
        </div>
    </div>
</form>

@endsection
