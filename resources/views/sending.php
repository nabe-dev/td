<!DOCTYPE html>
<html lang="en­US">
<head>
    <meta charset="utf­8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">

<h1>Desarrollo</h1>
    <div>
        <div class="alert alert-primary" role="alert">
            <a href="#" class="alert-link">email:</a> <?php echo $email; ?> 
        </div>
        <div class="alert alert-sueccess" role="alert">
            <a href="#" class="alert-link">nombre:</a>  <?php echo $nombre; ?> 
        </div>
        <div class="alert alert-warning" role="alert">
            <a href="#" class="alert-link">mensaje:</a>  <?php echo $mensaje; ?> 
        </div>
    </div>

</div>

</body>
</html>