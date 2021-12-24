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
    <?php


    $url = 'https://newsapi.org/v2/everything?q=apple&from=2021-12-22&to=2021-12-22&sortBy=popularity&apiKey=182706a4218e4d54820c0c72dd52488c';
    $response = file_get_contents($url);
    $newsData = json_decode($response);

    foreach ($newsData->articles as $News) {
        {
    }

  ?>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="<?php echo $News ->urlToImage ?>" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Title: <?php echo $News ->title ?></h5>
                        <p class="card-description">Description: <?php echo $News->description ?></p>
                        <p class="card-content">Content: <?php echo $News->content ?></p>
                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="<?php echo $News ->urlToImage ?>" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title"> <?php echo $News ->title ?></h5>
                        <p class="card-description"> <?php echo $News->description ?></p>

                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                    </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="<?php echo $News ->urlToImage ?>" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Title: <?php echo $News ->title ?></h5>
                        <p class="card-description">Description: <?php echo $News->description ?></p>
                        <p class="card-content">Content: <?php echo $News->content ?></p>
                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    }
    ?>



@endsection




