<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>
<body>
    @extends('base')

    @section('content')

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


    $urlApple = 'https://newsapi.org/v2/everything?q=apple&from=2021-12-22&to=2021-12-22&sortBy=popularity&apiKey=182706a4218e4d54820c0c72dd52488c';
    $response = file_get_contents($urlApple);
    $newsData = json_decode($response);

    $urlTech = 'https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=182706a4218e4d54820c0c72dd52488c';
    $response = file_get_contents($urlTech);
    $newsData = json_decode($response);

    $urlTesla = 'https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=182706a4218e4d54820c0c72dd52488c';
    $response = file_get_contents($urlTesla);
    $newsData = json_decode($response);


    foreach ($newsData->articles as $NewsApple) {
        {
    }

    foreach ($newsData->articles as $NewsTech) {
        {
    }

    foreach ($newsData->articles as $NewsTesla) {
        {
    }

  ?>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100">
                <img src="<?php echo $NewsApple ->urlToImage ?>" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Title: <?php echo $NewsApple ->title ?></h5>
                        <p class="card-description">Description: <?php echo $NewsApple->description ?></p>
                        <p class="card-content">Content: <?php echo $NewsApple->content ?></p>
                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="<?php echo $NewsTech ->urlToImage ?>" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Title: <?php echo $NewsTech ->title ?></h5>
                        <p class="card-description">Description: <?php echo $NewsTech->description ?></p>
                        <p class="card-content">Content: <?php echo $NewsTech->content ?></p>
                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                    </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100">
                <img src="<?php echo $NewsTesla ->urlToImage ?>" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title">Title: <?php echo $NewsTesla ->title ?></h5>
                        <p class="card-description">Description: <?php echo $NewsTesla->description ?></p>
                        <p class="card-content">Content: <?php echo $NewsTesla->content ?></p>
                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    }
    ?>

<?php
}
?>

<?php
    }
    ?>



@endsection





    @stop
</body>
</html>
