<!-- ========== Start controller ========== -->
<?php require_once "controllers/signup.php" ?>
<!-- ========== End controller ========== -->


<!-- ========== Start template ========== -->
<?php require_once "components/template_start.php"; ?>
<!-- ========== End template ========== -->

<main class="container container-fluid py-5">
  <div class="row min-vh-100 py-5 justify-content-center">
    <!-- ========== Start card ========== -->
    <div class="col-sm-10 col-md-6 col-lg-5">
      <div class="card border-0 shadow-lg">
        <div class="card-header p-4 border-0 bg-transparent">
          <i class="bi bi-plus-square display-5"></i>
          <h2 class="card-title">Sign Up</h2>
          <small class="card-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi doloremque veritatis magnam?</small>
        </div>
        <div class="card-body p-4 px-lg-5">
          <form action="signup.php" id="">
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
              <label for="specifyCountry" class="form-label">country</label>
              <select
                class="form-select form-select-lg"
                name="country"
                id="specifyCountry"
                required>
                <?php foreach ($countries as $country) : ?>
                  <option value="<?= strtolower($country) ?>"><?= ucwords($country) //, ucwords(), strtolower(), strtoupper() 
                                                              ?></option>
                <?php endforeach; ?>
              </select>
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
              <button type="submit" class="btn btn-lg btn-outline-primary px-4 w-100">
                Register
              </button>
            </div>

          </form>

          <div class="text-start my-4 mt-lg-5">
            <p class="small">Already have an account? <a href="index.php" class="link-primary text-decoration-none fw-bolder">Sign in</a></p>
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