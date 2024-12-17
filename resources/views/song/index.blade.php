<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1>Inserisci la canzone</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            @foreach ($song as $songs)
                <div class="col-12 col-md-3 m-2 ">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ Storage::url($songs->cover) }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
