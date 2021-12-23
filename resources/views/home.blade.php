@extends('base')

@section('content')

        {{-- first section --}}
    <div class="card bg-dark text-white">
        <img src="img/roadMapDeveloper.jpeg" class="card-img" alt="...">
        <div class="card-img-overlay">
        <h5 class="card-title">Breaking News</h5>
        <p class="card-text">La chaine d'information sur les dernièrs News du Web,Développement.</p>
        <p class="card-text">Last updated 3 mins ago</p>
        </div>
    </div>



    {{-- second section --}}
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="img/javascript.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="img/javascript.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a short card. blablablbalalablablablablablbalablbalablalablaba</p>
                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                    </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="img/javascript.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <button type="button" class="btn btn-primary btn-sm">Small button</button>
                </div>
            </div>
        </div>
    </div>


@endsection




