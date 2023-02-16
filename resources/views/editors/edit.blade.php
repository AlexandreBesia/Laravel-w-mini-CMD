@extends("layout.app")
@section("content")

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.css">
@endpush

<form action="{{route('editors.update', $editor->id)}}" method="POST">
    @CSRF
    @method("PUT")
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Edition du contenu de la page {{"$editor->page_name"}}</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-12">
                            <textarea class="form-control" id="markdown-editor" name="content_of_bloc"
                                rows="3" >{{ $editor->content_of_bloc }}</textarea>

                            @if ($errors->has('TODO'))
                                <div class="error">
                                    {{ $errors->first('TODO') }}
                                </div>
                            @endif
                        </div>
                        <div class="row mb-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
                                <a class="btn btn-primary mt-3" href="{{route('editors.index')}}">Retour</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Comment ajouter des images</h5>
                </div>
                <div class="card-body">
                    <label>Pour les images il faut copier coller la ligne ci-dessous puis mettre le lien de l'image entre les guillemets, à la place de <strong>lienImage</strong>.</label>
                    <label>Le lien peut venir d'internet ou du gestionnaire d'image</label>
                    <hr>
                    <p>&lt;img src="<strong>lienImage</strong>" class="img-fluid"&gt;</p>
                </div>
                <div class="card-header">
                    <h5 class="card-title">Comment ajouter des vidéos</h5>
                </div>
                <div class="card-body">
                    <label>Pour les vidéos il faut copier coller les lignes ci-dessous puis après le <strong>href="</strong> remplacer le lien YouTube par votre lien</label>
                    <label>Puis, pour que l'image de la vidéo s'affiche il faut modifier le deuxième lien pour que La partie après <strong>vi/</strong> soit identique à la partie après <strong>watch?v=</strong> du lien YouTube (voir exemple ci-dessous)</label>
                    <hr>
                    <p>
                    &lt;div align="center"&gt;<br>
                    &lt;a <strong>href="</strong>https://www.youtube.com/<strong>watch?v=</strong><u>BxiffuFCogA</u>" target="_blank"&gt;<br>
                    &lt;img src="https://img.youtube.com/<strong>vi/</strong><u>BxiffuFCogA</u>/0.jpg" class="img-fluid"&gt;<br>
                    &lt;/a&gt;<br>
                    &lt;/div&gt;</p>
                </div>
            </div>
        </div>
    </div>
</form>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/easymde/dist/easymde.min.js"></script>
    <script>
        const easyMDE = new EasyMDE({
            showIcons: ['strikethrough', 'code', 'table', 'redo', 'heading', 'undo', 'heading-bigger', 'heading-smaller', 'heading-1', 'heading-2', 'heading-3', 'clean-block', 'horizontal-rule'],
            element: document.getElementById('markdown-editor')});
    </script>
@endpush

@endsection
