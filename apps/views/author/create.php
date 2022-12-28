<div class="container border">
    <div class="bg-dark text-white p-2 ">
        <h3 class="h3 text-center">Author Registration Form</h3>
        <div class="text-center "> (<span class="text-danger">*</span>) Fields are Mandantory</div>
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
    <form method="post" action="<?= ROOT; ?>/author/store">
        <div class="mb-3">
            <label for="username" class="form-label">User Name <span class="text-danger">*</span> : </label>
            <input type="text" name="username" onchange="checkUser(this.value,ur)" minlength="5" class="form-control" id="username">
            <span id="ur"></span>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">User Password <span class="text-danger">*</span> :</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter password" required onchange="if(cpassword.value){
                if(this.value==cpassword.value ){
                ps.innerHTML='Matched';
                ps.className='text-success';

                }else{
                ps.innerHTML='Not-Matched';
                ps.className='text-danger';
                this.value='';
                  cpassword.value='';      
                }}">
        </div>

        <div class="mb-3">
            <label for="cpassword" class="form-label">Confirm Password <span class="text-danger">*</span> :</label>
            <input type="password" name="cpassword" class="form-control" id="cpassword" placeholder="Re-enter password" required onchange="if(this.value==password.value){
                ps.innerHTML='Matched';
                ps.className='text-success';

                }else{
                ps.innerHTML='Not-Matched';
                ps.className='text-danger';

                this.value='';
                  password.value='';      
                }">
            <span id="ps"></span>
        </div>
        <div class="mb-3">
            <label for="fullname" class="form-label">Display Name <span class="text-danger">*</span> : </label>
            <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter your full name for display" required>
        </div>
        <div class="mb-3">
            <label for="moible" class="form-label">Enter Mobile <span class="text-danger">*</span> : </label>
            <div class="form-control" style="display: flex;"><span style="display:block; height:30px; width: 40px; background-color: #bbb; color:blue">+91</span><input type="text" name="mobile" id="mobile" style="border:0 ; outline:0; width:100%" placeholder="Enter Mobile" pattern="[0-9]{10}" title="You can Only enter alphanumeric value with _ and @" required></div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Enter Email : </label>
            <input type="email" name="email" id="email" placeholder="Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Enter Gender : </label>
            <div class="form-control">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" checked id="ml" name="gender" value="male">
                    <label class="form-check-label" for="ml">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="fm" name="gender" value="female">
                    <label class="form-check-label" for="fm">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="tg" name="gender" value="tg">
                    <label class="form-check-label" for="tg">Trans-gender</label>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <div class="form-control">
                <button class="form-control btn btn-success">Save</button>
            </div>
        </div>
    </form>
</div>