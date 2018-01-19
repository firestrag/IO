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
                <h2 class="h2-responsive mb-2"><?=$insurance['name']?></h2>
                <p class=""><i class="fa fa-calendar"></i> <?=$insurance['date_start'].' - '.$insurance['date_end']?></p>

            </div>
            <!--/Card image-->

            <!--Card content-->
            <div class="card-body text-center">

                <p class="card-text mr-2 ml-2"><?=$insurance['description']?></p>

                <p class="orange-text mt-1 d-flex flex-row-reverse">
                    Cena za miesiąc<h5 class="waves-effect p-2"><?=$insurance['price_per_month']?> <i class="fa fa-chevron-right"></i></h5>
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
