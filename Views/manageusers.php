<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Manage users</title>
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
  <body >

    <?php include "includes/header.php"; ?>

      <div class="page-wrapper">
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Users
                </h2>
              </div>
              <!-- Page title actions -->
              <div class="col-auto ms-auto d-print-none">
                <div class="d-flex">
                  <input type="search" class="form-control d-inline-block w-9 me-3" placeholder="Search user…"/>
                  <a href="#" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                    New user
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <?php foreach ($users as $user) { ?>
              <div class="col-md-6 col-lg-3">
                <div class="card">
                  <div class="card-body p-4 text-center">
                    <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/<?= $user['image'] ?>)"></span>
                    <h3 class="m-0 mb-1"><a href="#"><?= $user['username'] ?></a></h3>
                    <div class="text-muted"><?= $user['name'] ?></div>
                    <div class="mt-3">
                      <span class="badge bg-purple-lt">Owner</span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <?php if ($user['id'] === $admin['id']) { ?>
                    <form action="/updateuser1/<?= $user['id'] ?>" >
                      <button class="card-btn" name="upu1">update</button>
                    </form>
                    <?php } ?>
                    <form action="/deleteuser1/<?= $user['id'] ?>" >
                      <button class="card-btn" name="delu1">update</button>
                    </form>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
        
    <?php include "includes/footer.php"; ?>

    <script src="./dist/js/tabler.min.js?1668287865" defer></script>
    <script src="./dist/js/demo.min.js?1668287865" defer></script>
  </body>
</html>