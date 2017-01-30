<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron hero-spacer" style="background: url('img/arrakis.png')">
        <h1>Arrakis</h1>
        <p>This is the principal repository, Arrakis is a proof-of-concept project to develop a microservice application.</p>
        <p><a class="btn btn-primary btn-large" href="https://github.com/lucasmauricio/arrakis" target="_blank">Souce in Github</a>
        </p>
    </header>

    <hr>

    <!-- Title -->
    <div class="row">
        <div class="col-lg-12">
            <h3>Avaliable services</h3>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Features -->
    <div class="row text-center">

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="img/eisplanet07.jpg" alt="">
                <div class="caption">
                    <h3><?php echo $services['wallach-ix']; ?></h3>
                    <p><?php echo $services_description['wallach-ix']; ?></p>
                    <p>
                        <a href="index.php?page=list&service=wallach-ix" class="btn btn-primary" target="_self">Test it!</a>
                        <a href="https://github.com/lucasmauricio/wallach-ix" class="btn btn-default" target="_blank">Github repo</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="img/eisplanet01.jpg" alt="">
                <div class="caption">
                    <h3><?php echo $services['ix']; ?></h3>
                    <p><?php echo $services_description['ix']; ?></p>
                    <p>
                        <a href="index.php?page=list&service=ix" class="btn btn-primary">Test it!</a>
                        <a href="https://github.com/lucasmauricio/ix" class="btn btn-default" target="_blank">Github repo</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="img/eisplanet02.jpg" alt="">
                <div class="caption">
                    <h3><?php echo $services['balut']; ?></h3>
                    <p><?php echo $services_description['balut']; ?></p>
                    <p>
                        <a href="index.php?page=list&service=balut" class="btn btn-primary">Test it!</a>
                        <a href="https://github.com/lucasmauricio/balut" class="btn btn-default" target="_blank">Github repo</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="thumbnail">
                <img src="img/eisplanet03.jpg" alt="">
                <div class="caption">
                    <h3><?php echo $services['discovery']; ?></h3>
                    <p><?php echo $services_description['discovery']; ?></p>
                    <p>
                        <a href="index.php?page=list&service=discovery" class="btn btn-primary">Test it!</a>
                        <a href="https://github.com/lucasmauricio/service-discovery" class="btn btn-default" target="_blank">Github repo</a>
                    </p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.row -->

    <hr>
