    <?php require_once('header.php'); ?>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-background" style="
              background-image: url(https://i.pinimg.com/564x/9b/e9/ed/9be9ed60dff56b3d0a25d1f84f577276.jpg)"></div>
            </div>

            <div class="carousel-item">
                <div class="carousel-background" style="
              background-image: url(https://i.pinimg.com/564x/4c/d1/40/4cd140e29a0d499d8fc8fe7adf0924e0.jpg);
            "></div>
            </div>

            <div class="carousel-item">
                <div class="carousel-background" style="
              background-image: url(https://i.pinimg.com/564x/a5/3e/78/a53e786c79ef0f631413924b9a1a14ed.jpg);
            "></div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div>
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col col-sm-12 col-md-10 col-lg-6 text-center">
                    <div class="main-zone">
                        <h1>Arta de a cauta informatii in Google!</h1>
                        <h2>Curs revolutionar</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis
                            ipsum suspendisse ultrices gravida. Risus commodo viverra
                            maecenas accumsan lacus vel facilisis.
                        </p>
                        <button class="btn btn-primary">Inscrie-te acum</button>
                        <button class="btn btn-outline-secondary">Cere detalii</button>
                    </div>
                </div>
            </div>

            <div class="row bg-secondary py-5">
                <div class="container">
                    <div class="row align-self-center justify-content-center">
                        <div class="col col-sm-6 col-md-4 col-12 text-center">
                            <img src="https://i.pinimg.com/564x/9d/d4/52/9dd45271b020a094a12bfeee12b39f65.jpg" class="round-img" />
                            <h4>Performanta</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Quis ipsum suspendisse ultrices gravida.
                            </p>
                        </div>

                        <div class="col col-sm-6 col-md-4 col-12 text-center">
                            <img src="https://i.pinimg.com/564x/9d/d4/52/9dd45271b020a094a12bfeee12b39f65.jpg" class="round-img" />
                            <h4>Siguranta</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Quis ipsum suspendisse ultrices gravida.
                            </p>
                        </div>

                        <div class="col col-sm-6 col-md-4 col-12 text-center">
                            <img src="https://i.pinimg.com/564x/9d/d4/52/9dd45271b020a094a12bfeee12b39f65.jpg" class="round-img" />
                            <h4>Venituri</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Quis ipsum suspendisse ultrices gravida.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row align-self-center justify-content-center">
                    <div class="col col-sm-6 col-lg-3">
                        <h3> <?php
                                $n = "Participanți la modulul ";
                                $i = 0;
                                echo $n . ++$i;
                                ?>
                        </h3>
                        <?php
                        $v1 = 1520;
                        echo number_format("$v1") . "<br>";
                        ?>
                    </div>

                    <div class="col col-sm-6 col-lg-3">
                        <h3> <?php
                                $n = "Participanți la modulul ";
                                echo $n . ++$i;
                                ?>
                        </h3>
                        <?php
                        $v2 = 4526;
                        echo number_format("$v2") . "<br>";
                        ?>
                    </div>

                    <div class="col col-sm-6 col-lg-3">
                        <h3> <?php
                                $n = "Participanți la modulul ";
                                echo $n . ++$i;
                                ?>
                        </h3>
                        <?php
                        $v3 = 8965;
                        echo number_format("$v3") . "<br>";
                        ?>
                    </div>

                    <div class="col col-sm-6 col-lg-3">
                        <h3>Număr total participanți</h3>
                        <?php
                        $v4 = 6207;
                        $sum = $v1 + $v2 + $v3;
                        if ($sum > 50000)
                            echo '<strong>' . $sum . '</strong>';
                        else echo number_format("$sum") . "<br>"; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <?php require_once('footer.php'); ?>