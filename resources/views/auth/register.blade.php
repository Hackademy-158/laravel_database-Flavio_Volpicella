<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center display-3 TitleForm">Registrati</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 formStyle rounded-4 p-4 bg-custom">
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputUtente" class="form-label text-light">Nome utente</label>
                        <input type="text" class="form-control" id="exampleInputUtente" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-light">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-light">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        <button type="button" id="togglePassword" class="btn btn-secondary mt-2">Mostra
                            Password</button>
                    </div>
                    <div class="mb-3">
                        <label for="confermapassword " class="form-label text-light">Conferma password</label>
                        <input type="password" class="form-control" id="confermapassword" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                </form>
            </div>
        </div>
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
</x-layout>
