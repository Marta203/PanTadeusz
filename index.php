<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <header class="bg-dark">
        <h1 class="text-white fw-bold text-center fs-2">Pan Tadeusz czyli ostatni zajazd na Litwie. <br> Historia szlachecka z roku 1811 i 1812 we dwunastu księgach wierszem</h1>
        <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Księgi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white-50" href="#">Historia</a>
            </li>
          </ul>
    </header>
    
    <div class="container row">
        <div class="list col-4">
            <ul class="list-group list-group-flush">
            <?php
                            for($k=1; $k<=12; $k++)
                            {
                              print("<li class='list-group-item'><a href='./index.php?k=$k&name=Ala'>Księga $k</a></li>");
                            }
                          ?>
                
            </ul>
        </div>
        <div class="img col-8">
        <?php 
            if(isset($_GET['k']))
            {
            $k = $_GET['k'];
            include_once("./k$k.html");
            }else
            {
              print('<img src="./pan-tadeusz.jpg" alt="Pan Tadeusz :)" style="height:500px; width:350px">');
            }
        ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>