<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign up</title>
    <link href="/dist/css/tabler.min.css?1668287865" rel="stylesheet" />
  <link href="/dist/css/tabler-flags.min.css?1668287865" rel="stylesheet" />
  <link href="/dist/css/tabler-payments.min.css?1668287865" rel="stylesheet" />
  <link href="/dist/css/tabler-vendors.min.css?1668287865" rel="stylesheet" />
  <link href="/dist/css/demo.min.css?1668287865" rel="stylesheet" />
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
    </style>
  </head>
  <body  class=" border-top-wide border-primary d-flex flex-column">
    <script src="./dist/js/demo-theme.min.js?1668287865"></script>
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/logo.svg" height="36" alt=""></a>
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

    <script src="./dist/js/tabler.min.js?1668287865" defer></script>
    <script src="./dist/js/demo.min.js?1668287865" defer></script>
  </body>
</html>