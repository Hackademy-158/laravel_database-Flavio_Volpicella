<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center display-3 TitleForm">Profilo utente di {{ Auth::user()->name }}</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            @foreach (Auth::user()->songs as $song)
                <div class="col-12 col-md-4 col-lg-3 my-3">
                    <div class="custom-card card shadow-sm">
                        <div class="card-img-container">
                            <img src="{{ Storage::url($song->cover) }}" class="card-img-top img-fluid" alt="cover">
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title text-uppercase">{{ $song->title }}</h5>
                            <p class="card-text text-muted">
                                {{ $song->description ?? 'Nessuna descrizione disponibile' }}
                            </p>
                            <p>Inserita da {{ $song->user->name ?? 'Utente Sconosciuto' }}</p>
                            <a href="#" class="btn btn-outline-danger">Ascolta Ora</a>
                            <form action="{{ route('song.delete', ['song' => $song]) }}" method="POST">
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
