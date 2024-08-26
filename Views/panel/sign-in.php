<!doctype html>
<html lang="en">
  <head>
    <title>Sign in</title>
    <?php include "init/style.php"; ?>
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column">
    <script src="./dist/js/demo-theme.min.js?1668287865"></script>
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="<?= $logo_footer['link'] ?>" class="navbar-brand navbar-brand-autodark"><img src="../static/<?= $logo_footer['value_setting'] ?>" height="36" alt=""></a>
        </div>
        <div class="card card-md">
          <div class="card-body">
            <h2 class="h2 text-center mb-4">Login to your account</h2>
            <form action="login_result" method="post">
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" name="username" placeholder="your username" autocomplete="off">
              </div>
              <div class="mb-2">
                <label class="form-label">
                  Password
                </label>
                <div class="input-group input-group-flat">
                  <input type="password" class="form-control" name="password"  placeholder="Your password"  autocomplete="off">
                </div>
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100" name="btnlogin">Log In</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include "init/script.php"; ?>
  </body>
</html>