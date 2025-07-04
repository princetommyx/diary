<!-- ========== Start template ========== -->
<?php require_once "components/template_start.php"; ?>
<!-- ========== End template ========== -->


<main class="container container-fluid py-5">
  <div class="row min-vh-100 py-5 justify-content-center">
    <!-- ========== Start card ========== -->
    <div class="col-sm-10 col-md-6 col-lg-5">
      <div class="card border-0 shadow-lg">
        <div class="card-header p-4 border-0 bg-transparent">
          <i class="bi bi-shield-fill display-5"></i>
          <h2 class="card-title">Sign In</h2>
          <small class="card-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi doloremque veritatis magnam?</small>
        </div>
        <div class="card-body p-4 px-lg-5">
          <form action="" id="">
            <div class="mb-3">
              <label for="specifyEmail" class="form-label">Email</label>
              <input
                type="text"
                class="form-control form-control-lg"
                name="email"
                id="specifyEmail"
                placeholder="john@email.com"
                required />
            </div>
            <div class="mb-3">
              <label for="specifyPassword" class="form-label">Password</label>
              <input
                type="text"
                class="form-control form-control-lg"
                name="password"
                id="specifyPassword"
                placeholder="******"
                minlength="6"
                required />
            </div>

            <div class="mt-5">
              <!-- <button type="submit" class="btn btn-lg btn-outline-primary px-4 w-100">
                  Register
                </button> -->
              <a href="" class="btn btn-lg btn-outline-primary w-100">Register</a>
            </div>
          </form>

          <div class="text-start my-4 mt-lg-5">
            <p class="small">Don't have an account? <a href="signup.php" class="link-primary">Sign up</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== End card ========== -->

  </div>
</main>

<!-- ========== Start footer ========== -->
<?php require_once "components/footer.php"; ?>
<!-- ========== End footer ========== -->

<!-- ========== Start footer ========== -->
<?php require_once "components/template_end.php"; ?>
<!-- ========== End footer ========== -->