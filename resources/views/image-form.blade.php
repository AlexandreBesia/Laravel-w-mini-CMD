@extends("layout.app")

@section('content')

<div class="container-sm">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-7">
            <div class="row g-3">
                <h1 class="text-center" style="margin-top: 100px">Mise en ligne d'image pour le site</h1>

                <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
                    @csrf
                    <input type="file" class="form-control" name="image" />

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary mt-3">Envoyer l'image</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<table class="table align-middle">
    <thead>
        <tr>
            <th scope="col">Nom de l'image</th>
            <th scope="col">Image</th>
            <th scope="col">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($images as $image)
            <tr>
                <td>{{ asset('images/' . $image->getFilename()) }}</td>
                <td>
                    <img style="width; height: 150px" class="img-thumbnail" src="{{asset("images/{$image->getFilename()}")}}">
                </td>
                <td>
                    {{-- <a class="btn">
                        <form action="{{ route('removeImage', $image->getFilename()) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm_delete()"><span class="bi-trash3-fill"></span></button>
                    </form> </a> --}}

                    {{-- <a class="btn">
                    <form action="{{route('removeImage')}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{$image->getFilename()}}"/>
                        <button type="submit" class="btn btn-danger" onclick="return confirm_delete()"><span class="bi-trash3-fill"></span></button>
                    </form> --}}
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
