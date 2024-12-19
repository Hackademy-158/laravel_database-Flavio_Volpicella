<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="TitleForm">Inserisci la canzone</h1>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 formStyle rounded-4 p-4 bg-custom">
                    <form action="{{ route('song.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label text-light">Titolo</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ old('title') }}">
                        </div>
                        <div class="mb-3">
                            <label for="artist" class="form-label text-light">Artista</label>
                            <input type="text" class="form-control" id="artist" name="artist"
                                value="{{ old('artist') }}">
                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label text-light">Copertina</label>
                            <input type="file" class="form-control" id="cover" name="cover"
                                value="{{ old('cover') }}">
                        </div>
                        <div class="mb-3">
                            <label for="album" class="form-label text-light">Album</label>
                            <input type="text" class="form-control" id="album" name="album"
                                value="{{ old('album') }}">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label text-light">Descrizione</label>
                            <textarea name="description" class="form-control" id="description">{{ old('description') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Inserisci</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>
