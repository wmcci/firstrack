@extends('Admin.layout.app')


@section('heading', 'Insertion de la vidéo')

@section('video_insert')


    <div class="section-body">
    <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
        <form action="{{ route('store_video') }}" method="post" enctype="multipart/form-data">@csrf

            <div class="form-group mb-3">
                <label>Description de la vidéo</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror " name="description" value="{{ old('description') }}">
                @error('description')
                     <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

                <div class="form-group mb-3">
                            <label>Choisir la vidéo</label>
                            <div>
                                <input type="file" class="form-control @error('fichier') is-invalid @enderror" name="fichier">
                                @error('fichier')

                                       <div class="text-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Soumettre</button>
                        </div>

        </form>
    </div>
    </div>
    </div>
    </div>



@endsection
