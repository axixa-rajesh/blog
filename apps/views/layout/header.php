<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Axixa Technologies</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <?php
                            if ((Session::get('loginDtl'))) { ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                            <?php } else { ?>

                                <li class="nav-item">
                                    <a class="nav-link active" href="#">Login</a>
                                </li>
                            <?php } ?>
                        </ul>
                        <span class="navbar-text">
                            Welcome <?= ($dtl = Session::get('loginDtl')) ? $dtl['full_name'] : 'Guest'; ?>
                        </span>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">