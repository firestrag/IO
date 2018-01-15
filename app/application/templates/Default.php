<!DOCTYPE html>
<html lang="pl">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$title?></title>

    <base href="<?= Power_Url::getBasicUrl()?>" >

    <!-- Font Awesome -->
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link href="public/css/bootstrap.css" rel="stylesheet">
    <!-- Material Design for Bootstrap -->
    <link href="public/css/mdb.min.css" rel="stylesheet">
    <!-- my css -->
    <link href="public/css/style.css" rel="stylesheet">

    <!-- jQuery -->
    <script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>


    <!-- SCRIPTS -->
    <!-- Popper -->
    <script type="text/javascript" src="public/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="public/js/bootstrap.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="public/js/mdb.min.js"></script>


</head>

<body class="white-skin">


<?= $content ?>



<script>
    new WOW().init();
</script>
    <!-- SCRIPTS -->
    <!-- Popper -->
    <script type="text/javascript" src="public/js/popper.min.js"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<!-- MDB -->
<script type="text/javascript" src="public/js/mdb.min.js"></script>


</body>
</html>