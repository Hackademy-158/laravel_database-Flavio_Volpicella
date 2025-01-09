<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-3 TitleForm">Lista delle piattaforme</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            @if (count($platforms) > 0)
                @foreach ($platforms as $platform)
                    <div class="col-12 col-md-3 col-lg-3 my-3">
                        <div class="custom-card card shadow-sm">
                            <div class="card-img-container">
                                <img src="{{ Storage::url($platform->logo) }}" class="card-img-top img-fluid"
                                    alt="cover">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-uppercase">{{ $platform->name }}</h5>
                                    <p class="card-text text-muted">Inserita da:{{ $platform->user->name }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h3 class="TitleForm">Non ci sono piattaforme</h3>
                <p class="TitleForm pt-5">Inseriscina una</p>
            @endif
        </div>
    </div>
</x-layout>
