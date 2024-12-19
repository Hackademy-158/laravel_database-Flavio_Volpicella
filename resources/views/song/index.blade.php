<x-layout>
    @if (session('songDelete'))
        <div class="alert alert-success">
            {{ session('songDelete') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="TitleForm ">Le tue canzoni</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            @foreach ($song as $songs)
                <div class="col-12 col-md-4 col-lg-3 my-3">
                    <div class="custom-card card shadow-sm">
                        <div class="card-img-container">
                            <img src="{{ Storage::url($songs->cover) }}" class="card-img-top img-fluid" alt="cover">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase">{{ $songs->title }}</h5>
                            <p class="card-text text-muted">
                                {{ $songs->description ?? 'Nessuna descrizione disponibile' }}
                            </p>
                            <a href="#" class="btn btn-outline-danger">Ascolta Ora</a>
                            <form action="{{ route('song.delete', ['song' => $songs]) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-outline-danger m-2">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
