<div class="container mt-3">
    <div class="card-header badge-info">
        <h3 class="text text-dark">About Us</h3>
        <h7>Framework CodeIgniter 3.10, PHP 8.2.4, Bootstrap 4.3.1, SweetAlert 2.11.7 & vendor sb-admin2 hasil belajar dari youtube WebProgrammingUnpas</h7>
        <hr class="my-4 badge-dark">
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, molestiae sunt doloribus error ullam expedita cumque blanditiis quas vero, qui, consectetur modi possimus. Consequuntur optio ad quae possimus, debitis earum.</p> -->
        <div class="row mt-3">
            <div class="col m6 light">
                <h5>We Are Professionals</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi quo accusantium repellat similique ipsa doloribus in aliquam earum eaque, possimus necessitatibus sunt repellendus ullam recusandae voluptas dolore debitis saepe facere.</p>
            </div>
            <div class="col m6 light">
                <h4 class="small font-weight-bold">WEB DEVELOPMENT <span class="float-right">95%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">MOBILE APP DEVELOPMENT <span class="float-right">85%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">GAME DEVELOPMENT <span class="float-right">90%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
        <p class="lead"></p>
        <!-- <hr class="my-4 badge-dark"> -->
    </div>
    <!-- Contact -->
    <section class="contact" id="contact">
        <div class="container">

            <div class="row justify-content-lg-start mt-3">
                <div class="col-lg-3">
                    <div class="card bg-primary text-white mb-3 text-center">
                        <div class="card-body">
                            <h5 class="card-title">Contact Me</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Location</h4>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <h6 class="card-subtitle mb-2 text-muted">My Home</h6>
                            <p class="card-text">Jl. Raya-kalitidu No. 183 Bojonegoro East Java Indonesia</p>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <form method="get" action="">
                        <div class="form-group">
                            <label for="nama">Your Name</label>
                            <input type="text" class="form-control" id="nama" name="nama" maxlength="14" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" maxlength="21" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" maxlength="14" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" maxlength="100" required rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3">
                    <div class="card row">
                        <div class="card-header bg-primary text-white">
                            <h4>Your Message</h4>
                        </div>
                        <div class="card-body">
                            <?php if (isset($_GET['submit'])) : ?>
                                <h5 class="card-title">From <?= $_GET['nama']; ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted">Email : <?= $_GET['email']; ?></h6>
                                <h6 class="card-subtitle mb-2 text-muted">Phone : <?= $_GET['phone']; ?></h6>
                                <p class="lead text-gray-800 mb-1">Message</p>
                                <p>"<?= $_GET['message']; ?>"</p>
                            <?php elseif (!isset($_GET['submit'])) : ?>
                                <h5 class="card-title">From </h5>
                                <h6 class="card-subtitle mb-2 text-muted">Email : </h6>
                                <h6 class="card-subtitle mb-2 text-muted">Phone : </h6>
                                <p class="lead text-gray-800 mb-1">Message</p>
                                <p>"......."</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>