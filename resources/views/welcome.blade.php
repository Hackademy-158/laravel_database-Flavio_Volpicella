<x-layout>
    @if (session('songCreated'))
    <div class="container">
        <div class="row">
            <div class="col-12 justify-content-center d-flex align-items-center">
                <div class="alert alert-success ">
                    {{session('songCreated')}}
                </div>
            </div>
        </div>
    </div>
    @endif
</x-layout>
