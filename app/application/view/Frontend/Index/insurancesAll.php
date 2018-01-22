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
                    <form method="post" action="zawrzyj-ubezpieczenie/<?=$insurance['id']?>">

                    <div class="card card-cascade wider">


                        <div class="view gradient-card-header blue-gradient" style="z-index: unset">
                            <h2 class="h2-responsive mb-2"><?=ucfirst($insurance['nazwa'])?></h2>

                        </div>

                        <div class="card-body text-center" style="z-index: unset">

                            <p class="card-text mr-2 ml-2"><?=ucfirst($insurance['opis_polisy'])?></p>

                            <p class="orange-text mt-1 d-flex flex-row-reverse">
                                Cena za miesiąc: <?=$insurance['skladka_miesieczna']?>zł
                            </p>
                            <p class="orange-text mt-1 d-flex flex-row-reverse">
                                Maksymalne odszkodowanie: <?=$insurance['max_odszkodowanie']?>zł
                            </p>

                                <div class="md-form">
                                    <input placeholder="Wybierz datę" type="text" id="date-picker-<?=$insurance['id']?>-a" name="date_from" class="form-control datepicker">
                                    <label for="date-picker-<?=$insurance['id']?>-a">Data od</label>
                                </div>

                            <div class="md-form">
                                <input placeholder="Wybierz datę" type="text" id="date-picker-<?=$insurance['id']?>-b" name="date_to" class="form-control datepicker">
                                <label for="date-picker-<?=$insurance['id']?>-b">Data do</label>
                            </div>
                                <p>
                                    <button type="submit" class="btn btn-success btn-rounded">Zawrzyj</button>
                                </p>


                        </div>

                    </div>
                    </form>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</div>
