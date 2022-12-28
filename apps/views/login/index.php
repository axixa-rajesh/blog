<div class="container border">
    <div class="bg-dark text-white p-2 ">
        <h3 class="h3 text-center">Login Form</h3>

    </div>
    <?php if ($e = Session::get('error')) {
        if (is_array($e)) {
            foreach ($e as $err) {
    ?>
                <div class="alert alert-danger">
                    <?= $err; ?>
                </div>
            <?php
            }
        } else {
            ?>
            <div class="alert alert-danger">
                <?= $e; ?>
            </div>
    <?php
        }
        Session::delete('error');
    }
    ?>

    <form method="post" action="<?= ROOT; ?>/login/index">
        <div class="mb-3">
            <label for="username" class="form-label">User Name : </label>
            <input type="text" name="username" class="form-control" id="username">
            <span id="ur"></span>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">User Password :</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required>
        </div>
        <div class="mb-3">
            <div class="form-control">
                <button class="form-control btn btn-success">Login</button>
            </div>
        </div>
    </form>
</div>