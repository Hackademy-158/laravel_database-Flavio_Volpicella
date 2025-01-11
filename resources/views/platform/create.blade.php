<x-layout>
    @if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center display-3 TitleForm">Inserisci piattaforme</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 formStyle rounded-4 p-4 bg-custom">
                <form action="{{ route('platform.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Nome piattaforma</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label text-light">Logo</label>
                        <input type="file" class="form-control" id="logo" name="logo">
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>
