<?php

echo View::factory('Frontend/Admin/menu')
    ->render();

?>

<div style="height: 100px"></div>
<div class="row">
    <div class="col-12 col-md-10 col-xl-8 center">
        <div class="row">


            <?php
            foreach ($insurances as $insurance):?>

                <div class="col-lg-4 col-md-6 mb-r">


                    <div class="card card-cascade wider">


                        <div class="view gradient-card-header blue-gradient">
                            <h2 class="h2-responsive mb-2"><?=$insurance['name']?></h2>
                            <p class=""><i class="fa fa-calendar"></i> <?=$insurance['date_start'].' - '.$insurance['date_end']?></p>

                        </div>

                        <div class="card-body text-center">

                            <p class="card-text mr-2 ml-2"><?=$insurance['description']?></p>

                            <p class="orange-text mt-1 d-flex flex-row-reverse">
                                Cena: <?=$insurance['price_per_month']?>zł
                            </p>
                            <p>
                                <a href="zawrzyj-ubezpieczenie/<?=$insurance['id']?>"><button type="submit"" class="btn btn-success btn-rounded">Wybierz</button></a>
                            </p>
                        </div>

                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

