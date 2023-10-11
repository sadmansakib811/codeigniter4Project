<?= $this->extend('public_layout') ?>
<?= $this->section('content') ?>

<div class='container'>
    <div class='row'>
         <div class='col-sm-12'>
              <h1>This is register</h1>
              <!-- form starts from here -->
              <div class="container">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="<?= base_url()?>register" method="post">
                        <div class="mb-2">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="mb-2">
                            <label for="email">Email id</label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="mb-2">
                            <label for="password">Password</label>
                            <input type="text" class="form-control" name="password">
                        </div>
                        <div class="mb-2">
                            <label for="cpassword">Confirm Password</label>
                            <input type="text" class="form-control" name="cpassword">
                        </div>

                        <div class="mb-2 text-center">
                           <input type="submit" name="register" value="register" class="btn btn-primary">
                        </div>
                    </form>
                    <a href="<?= base_url()?>login">Already have an account?</a>
                </div>
            </div>
        </div>
    </div>
</div>
         </div>
    </div>
</div>



<?= $this ->endSection() ?>