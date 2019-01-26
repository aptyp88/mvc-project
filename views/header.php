<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/main.css">
    <title>
        <?= isset($title)?$title : '' ?>
    </title>
</head>
<body>
<div class="wrapper">
    <nav class="navbar navbar-expand navbar-light bg-primary">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="/">Главная страница <span class="sr-only">(current)</span></a>
                <?php if(!$_SESSION['user_id'])
                {
                    echo '<a class="nav-item nav-link" href="/user/login">Вход </a>';
                    echo '<a class="nav-item nav-link" href="/user/allusers">Все пользователи </a>';
                }
                else
                {
                    echo '<a class="nav-item nav-link" href="/user/exit">Выход </a>';
                }
                    
                ?>
                <!-- <a class="nav-item nav-link" href="/user/login">Вход </a> -->
                <!-- <a class="nav-item nav-link" href="/user/allusers">Все пользователи </a> -->
            </div>
        </div>
    </nav>
</div>