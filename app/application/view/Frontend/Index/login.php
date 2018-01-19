<!--Navigation-->
<main style="height: 100%;background-image: url('public/img/1.jpg');">

    <!-- Intro Section -->
    <div id="home" class="view jarallax" data-jarallax='{"speed": 0.2}' style="">
        <div class="full-bg-img">
            <div class="container flex-center">
                <div class="row smooth-scroll">
                    <div class="col-md-12 white-text text-center">
                        <div class="wow fadeInDown" data-wow-delay="0.2s">
                            <h2 class="display-1 font-bold font-up mb-2 spacing rgba-white-slight px-4 py-3">
                                <strong>Ubezpieczenia turystyczne</strong>
                            </h2>

                            <h4 class="subtext-header mt-4 mb-5"><p>Ubezpieczenie turystyczne pozwala objąć ochroną zarówno podróż zagraniczną, jak i krajową.</p>
                                <p>Szeroki zakres ochrony, możesz wybrać wariant dostosowany do swoich potrzeb.</p></h4>
                        </div>
                        <form>
                            <div style="background-color: #ffffff">
                                <select class="mdb-select" style="background-color: #ffffff">
                                    <option value="" disabled selected>Wybierz swoje konto</option>
                                    <?php foreach( $users_list as $user): ?>
                                        <option value="<?= $user['id']?>"><?=$user['imie'].' '.$user['nazwisko']?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <input type="hidden" name="action_login" value="1" />

                            <button type="submit"" class="btn btn-success btn-rounded">Zaloguj</button>

                        </form>


                    </div>
                </div>
            </div>
        </div>

</main>





