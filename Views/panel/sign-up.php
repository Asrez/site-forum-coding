<!doctype html>
<html lang="en">
  <head>
    <title>Sign up</title>
    <?php include "init/style.php"; ?>
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column">
    <script src="./dist/js/demo-theme.min.js?1668287865"></script>
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="/" class="navbar-brand navbar-brand-autodark"><img src="../static/<?= $logo_footer['value_setting'] ?>" height="36" alt=""></a>
        </div>
        <form class="card card-md" action="./" method="Post" >
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Create new account</h2>
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter name">
            </div>
            <div class="mb-3">
              <label class="form-label">Usrname</label>
              <input type="text" class="form-control" name="username" placeholder="Enter username">
            </div>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control" name="password"  placeholder="Password"  autocomplete="off">
              </div>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100" name="btninuser">Create new account</button>
            </div>
          </div>
          <select name="state" style="opacity:0">
            <option value="0">User</option>
            <option value="1">Admin</option>
          </select>
        </form>
        <div class="text-center text-muted mt-3">
          Already have account? <a href="/login" tabindex="-1">Sign in</a>
        </div>
      </div>
    </div>
    <?php include "init/script.php"; ?>
  </body>
</html>