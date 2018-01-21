
<?php

echo View::factory('Frontend/Admin/menu')
    ->render();
?>
<main>
<div style="height:100px"></div>

<div class="row">
    <div class="col-12 col-md-10 col-xl-8 center">

        <div class="card card-cascade narrower">


            <div class="row">

            <div class="col-xl-5 col-lg-12 mr-0">
                <div class="view gradient-card-header light-blue lighten-1">
                    <h2 class="h2-responsive mb-0">Dodaj ubezpieczenie</h2>
                </div>
            </div>

        </div>

            <form method="post" action="dodaj-ubezpieczenie">
                <div class="row card-body pt-3">
                    <div class="col-12 col-md-5">

                        <br/>
                        <div class="md-form mb-r">
                            <i class="fa fa-indent prefix"></i>
                            <input id="input_name" class="form-control validate" type="text" name="name" value="" required />
                            <label for="input_name">Nazwa</label>
                        </div>

                        <br/>
                        <div class="md-form">
                            <i class="fa fa-money prefix"></i>
                            <input id="input_price" class="form-control validate" type="text" name="price" value="" required pattern="\d+(\.\d{2})"/>
                            <label for="input_price"  data-error="sdadsa">Cena</label>
                        </div>

                        <button type="submit" class="btn btn-primary waves-effect waves-light">Dodaj</button>
                    </div>

                    <div class="col-12 col-md-5">
                        <div class="md-form">
                            <textarea id="textarea-char-counter" class="md-textarea" name="description"></textarea>
                            <label for="textarea-char-counter">Opis</label>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
</main>