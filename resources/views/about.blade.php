@extends("layout.app")
@section("content")

<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-7">
            <div class="row g-3">
                <!-- ne barre pas quand on met ~~text~~ et bug sur les titres H1 -->
                {{--
                    @markdown
                    {!! $editors->content_of_bloc !!}
                    @endmarkdown
                --}}

                <!-- ne barre pas quand on met ~~text~~ -->
                {{--
                    @markdown($editors->content_of_bloc )
                --}}

                <!-- affiche le md brut sans appliquer les balises -->
                {{--
                    {!! $editors->content_of_bloc !!}
                --}}

                <!-- Version qui marche complètement -->
                {!! Str::markdown($editors->content_of_bloc) !!}
            </div>
        </div>
    </div>
</div>

@endsection
