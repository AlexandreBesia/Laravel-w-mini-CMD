@extends("layout.app")
@section("content")

<div class="container-fluid">
    <div  class="row justify-content-center">
        <div class="col-md-9">
            <div class="row mb-3">
                <div class="col-12">
                    <a class="btn btn-primary mt-3" href="{{route('clients.index')}}">Retour</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label><strong>Nom de famille</strong></label>
                            <p>{{"$client->last_name"}}</p>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-6">
                                <label><strong>Prénom</strong></label>
                                <p>{{"$client->first_name"}}</p>
                            </div>
                            <div class="form-group col-6">
                                <label><strong>Numéro de téléphone</strong></label>
                                <p>{{phone($client->phone_number)->formatInternational();}}</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-6">
                                <label><strong>Email</strong></label>
                                <p>{{"$client->email"}}</p>
                            </div>
                            <div class="form-group col-6">
                                <label><strong>Âge</strong></label>
                                <p>{{ $client->age() }} ans</p>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label><strong>Statut professionnel</strong></label>
                            <p>{{ $client->professionalstatu->professionalstatuname }}</p>
                        </div>
                        <hr>
                        <div class="form-group col-12">
                            <label><strong>Types de prestations</strong></label>
                            <p>{!! nl2br("$client->type_of_service") !!}</p>
                        </div>
                        <hr>
                        <div class="form-group col-12">
                            <label><strong>Durée et date des consultations</strong></label>
                            <p>{!! nl2br("$client->duration_and_date_of_consultation") !!}</p>
                        </div>
                        <hr>
                        <div class="form-group col-12">
                            <label><strong>Date d’échéance</strong></label>
                            <p>{{"$client->due_date"}}</p>
                        </div>
                        <hr>
                        <div class="form-group col-12">
                            <label><strong>Note personnelle</strong></label>
                            <p>{!! nl2br("$client->personal_note") !!}</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <a class="btn btn-primary mt-3" href="{{route('clients.index')}}">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
