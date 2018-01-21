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
    <link href="public/css/style.css?v=2" rel="stylesheet">

    <!-- jQuery -->
    <script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>




</head>

<body class="white-skin">


<?= $content ?>

<!--Footer-->
<footer class="page-footer stylish-color-dark">

    <!--Footer Links-->
    <div class="container">
        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">

            <!--First column-->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="title mb-4 font-bold">Autorzy</h6>
                <p>Mateusz Bodek</p>
                <p>Kaja Kwiatkowska</p>
                <p>Konrad Strąg</p>
            </div>
            <!--/.First column-->


            <hr class="w-100 clearfix d-md-none">

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="title mb-4 font-bold">Inżynieria Obliczeniowa</h6>
                <p>rok III - semestr zimowy</p>
                <p>2017/18</p>
            </div>
            <!--/.Fourth column-->

        </div>

    </div>

</footer>
<!--/.Footer-->


    <!-- SCRIPTS -->
    <!-- Popper -->
    <script type="text/javascript" src="public/js/popper.min.js"></script>
<!-- Bootstrap -->
<script type="text/javascript" src="public/js/bootstrap.min.js"></script>
<!-- MDB -->
<script type="text/javascript" src="public/js/mdb.min.js"></script>

<script>
    new WOW().init();
    $('.mdb-select').material_select();
</script>

</body>
</html>