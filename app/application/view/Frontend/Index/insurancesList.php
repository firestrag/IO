<?php

echo View::factory('Frontend/Index/menu')
    ->render();
?>
<div style="height: 100px"></div>
<div class="row">
    <div class="col-12 col-md-10 col-xl-8 center">
        <div class="row">


<?php
foreach ($insurances as $insurance):?>

    <div class="col-lg-4 col-md-6 mb-r">

        <!--Card-->
        <div class="card card-cascade wider">

            <!--Card image-->
            <div class="view gradient-card-header blue-gradient">
                <h2 class="h2-responsive mb-2"><?=ucfirst($insurance['nazwa'])?></h2>
                <p class=""><i class="fa fa-calendar"></i> <?=$insurance['data_rozpoczecia'].' - '.$insurance['data_zakonczenia']?></p>

            </div>
            <!--/Card image-->

            <!--Card content-->
            <div class="card-body text-center">

                <p class="card-text mr-2 ml-2"><?=ucfirst($insurance['opis_polisy'])?></p>

                <p class="orange-text mt-1 d-flex flex-row-reverse">
                    Cena: <?=$insurance['cena']?>zł
                </p>
                <p class="orange-text mt-1 d-flex flex-row-reverse">
                    Maksymalne odszkodowanie: <?=$insurance['max_odszkodowanie']?>zł
                </p>
                <p>
                    <a href="zawrzyj-ubezpieczenie/<?=$insurance['id']?>"><button type="submit"" class="btn btn-success btn-rounded">Przedłuż o miesiąc</button></a>
                </p>
            </div>
            <!--/.Card content-->

        </div>
        <!--/.Card-->

    </div>
<?php endforeach; ?>
        </div>
    </div>
</div>
