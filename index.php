<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Мои орешки</title>
</head>
<body>

<?php require "blocks/header.php" ?>

<div class="container mt-5">
    <h3 class="mb-5">Наши орешки</h3>


    <div class="d-flex flex-wrap">

    <?php
        for($i=0; $i<5; $i++):
    ?>
    <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">            
            <h4 class="my-0 fw-normal">Вид орешков</h4>
        </div>
        <div class="card-body">
            <img src="img/0<?php echo $i ?>.png" class="img-thumbnail">
            <h1 class="card-title pricing-card-title">₽0<small class="text-muted fw-light">/руб</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
                <li>10 users included</li>
                <li>2 GB of storage</li>
                <li>Email support</li>
                <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
        </div>
    </div>
    <?php endfor;?>

    </div>
</div>


<?php require "blocks/footer.php" ?>
</body>
</html>