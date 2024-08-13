<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Settings</title>
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
      <div class="page-wrapper">
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Account Settings
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            < class="card">
              <div class="row g-0">
              <form action="/deleteimg" method="post" enctype="multipart/form-data">
                <div class="col d-flex flex-column">
                  <di class="card-body">
                    <h2 class="mb-4">My Account</h2>
                    <h3 class="card-title">Profile Details</h3>
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="avatar avatar-xl" style="background-image: url(/static/avatars/<?= $user['image'] ?>)"></span>
                      </div>
                      <div class="col-auto">
                        <form action="/updateimg" method="post" enctype="multipart/form-data">
                        <input type="file" name="image">
                        <button type="submit" name="btnChUImg">UPDATE AVATAR</button>
                        </form>
                      </div>
                      <div class="col-auto">
                      <button type="submit" name="btnDUImg">DELETE AVATAR</button>
                      </form>
                    </div>
                    </div>
                    <form action="/updateuser/<?= $user['id'] ?>" method="post" >
                    <h3 class="card-title mt-4">username</h3>
                    <div>
                      <div class="row g-2">
                        <div class="col-auto">
                          <input type="text" class="form-control w-auto" value="<?= $user['username'] ?>">
                        </div>
                      </div>
                    </div>
                    <h3 class="card-title mt-4">name</h3>
                    <div>
                      <div class="row g-2">
                        <div class="col-auto">
                          <input type="text" class="form-control w-auto" value="<?= $user['name'] ?>">
                        </div>
                      </div>
                    </div>
                    <h3 class="card-title mt-4">Email</h3>
                    <div>
                      <div class="row g-2">
                        <div class="col-auto">
                          <input type="email" class="form-control w-auto" value="<?= $user['email'] ?>">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer bg-transparent mt-auto">
                    <div class="btn-list justify-content-end">
                      <a href="#" class="btn">
                        Cancel
                      </a>
                      <a href="#" class="btn btn-primary">
                        Submit
                      </a>
                    </div>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
    <script src="/dist/js/tabler.min.js?1668287865" defer></script>
    <script src="/dist/js/demo.min.js?1668287865" defer></script>
  </body>
</html>