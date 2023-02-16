@extends("layout.app")
@section("content")

<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-7">
            <div class="row g-3">
                {!! Str::markdown($editors->content_of_bloc) !!}
            </div>
        </div>
    </div>
</div>

@endsection
