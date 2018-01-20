<main style="height: 100%;background-image: url('public/img/1.jpg');">

    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="">
        <div class="full-bg-img">
            <div class="container flex-center">
                <div class="row smooth-scroll">
                    <div class="col-md-12 white-text text-center">
                        <div class="wow fadeInDown" data-wow-delay="0.2s">
                            <h2 class="display-1 font-bold font-up mb-2 spacing rgba-white-slight px-4 py-3">
                                <strong>Ubezpieczenia turystyczne</strong>
                            </h2>

                            <h4 class="subtext-header mt-4 mb-5"><p>Panel Administracyjny</p></h4>

<!--                            <h4 class="subtext-header mt-4 mb-5"><p>Ubezpieczenie turystyczne pozwala objąć ochroną zarówno podróż zagraniczną, jak i krajową.</p>-->
<!--                                <p>Szeroki zakres ochrony, możesz wybrać wariant dostosowany do swoich potrzeb.</p></h4>-->
                        </div>
                        <form method="post" action="admin-login">
                            <div style="background-color: #ffffff">
                                <select name="id" class="mdb-select" style="background-color: #ffffff">
                                    <option value="" disabled selected>Wybierz konto administratora</option>
                                    <?php foreach( $admin_list as $admin): ?>
                                        <option value="<?= $admin['id']?>"><?=$admin['imie'].' '.$admin['nazwisko']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <input type="hidden" name="action_login" value="1" />

                            <button type="submit" class="btn btn-success btn-rounded">Zaloguj</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>

</main>