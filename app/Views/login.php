<section  style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
              <?php if(session()->getFlashdata('msg')):?>
                <div class="alert alert-warning">
                  <?= session()->getFlashdata('msg') ?>
                </div>
                <?php endif;?>
                <form action="<?php echo base_url("signin");?>" method="post">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>
                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  <span class='text-danger'>
                  <?php if(isset($validation) && $validation->hasError('membernumber'))
                  {
                    echo $validation->getError('membernumber');
                  }?>
                  </span>
                  <div class="form-outline mb-4">
                    <input type="number" id="membernumber" name="membernumber" value="<?= set_value('membernumber') ?>" autofocus="true" autocomplete="off" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Member Number</label>
                  </div>
                  <span class='text-danger'>
                  <?php if(isset($validation) && $validation->hasError('password'))
                  {
                    echo $validation->getError('password');
                  }?>
                  </span>
                  <div class="form-outline mb-4">
                    <input type="password" id="paswword" name="password" autofocus="true" autocomplete="off" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>
                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit">Login</button>
                  </div>
                  <!-- <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account?
                  <a href="#!" style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a> -->
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
