<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    </head>
    <body>

            <div class="content" >
     
            <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/">Accueil</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="client"> Clients</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="produit">Produits</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="commande" >Commandes</a>
  </li>
</ul>
      @yield('content')
     </div>
        </div>
    </body>
</html>
