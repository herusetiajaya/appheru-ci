<div class="container mt-3">
    <div class="jumbotron mt-3 bg-gradient-info">
        <h1 class="display-4">Welcome to my website</h1>
        <!-- <p class="lead">Hello, <?= $nama; ?> !</p> -->
        <p class="lead text-white">Hello <span class="efek-tik"></span>,</p>
        <p class="lead text-white">I'm just learning to build this website app, So sorry if there are so many mistakes. :)</p>
        <hr class="my-4">
        <a class="btn btn-dark btn-lg" href="#content" role="button">Content</a>
    </div>
    <!-- homep -->
    <div class="jumbotron" id="homep">
        <div class="container">
            <div class="slider row justify-content-center">
                <img src="<?= base_url('assets/'); ?>img/profile/default.png" class="rounded-circle img-thumbnail img-slideshow" style="width: 25%;">
                <img src="<?= base_url('assets/'); ?>img/profile/admin.png" class="rounded-circle img-thumbnail img-slideshow" style="width: 25%;">
                <img src="<?= base_url('assets/'); ?>img/profile/martis.png" class="rounded-circle img-thumbnail img-slideshow" style="width: 25%;">
                <!-- <button onclick="plusDivs(-1)">&raquo</button> -->
                <!-- <button onclick="plusDivs(1)">&laquo</button> -->
            </div>
            <!-- <img src="<?= base_url('assets/'); ?>img/profile/profile1.png" class="rounded-circle img-thumbnail img-slideshow" style="width: 25%;"> -->
            <div class="text-center">
                <h1 class="display-4">Heru Setiawan</h1>
                <h3 class="lead">Lecturer | Programmer | Gamer</h3>
            </div>
        </div>
    </div>
    <!-- Content -->
    <section class="content bg-light mb-3" id="content" style="min-height: 420px;">
        <div class="container">
            <div class="row pt-4 mb-4">
                <div class="col text-center">
                    <h2>Content</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/'); ?>img/thumbs/1.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/'); ?>img/thumbs/2.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/'); ?>img/thumbs/3.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/'); ?>img/thumbs/4.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/'); ?>img/thumbs/5.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md mb-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/'); ?>img/thumbs/6.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>