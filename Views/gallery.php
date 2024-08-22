<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Gallery</title>
    <link href="../static/<?= $logo['value_setting'] ?>" rel="shortcut icon" type="image/x-icon">
    <link href="../dist/css/tabler.min.css?1668287865" rel="stylesheet" />
    <link href="../dist/css/tabler-flags.min.css?1668287865" rel="stylesheet" />
    <link href="../dist/css/tabler-payments.min.css?1668287865" rel="stylesheet" />
    <link href="../dist/css/tabler-vendors.min.css?1668287865" rel="stylesheet" />
    <link href="../dist/css/demo.min.css?1668287865" rel="stylesheet" />
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
                  Gallery
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <?php foreach ($posts as $post) { ?>
              <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                  <a href="post/<?= $post['id'] ?>" class="d-block"><img src="/static/photos/<?= $post['image'] ?>" class="card-img-top"></a>
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <span class="avatar me-3 rounded" style="background-image: url(/static/avatars/<?= $post['userimage'] ?>)"></span>
                      <div>
                        <div><?= $post['title'] ?></div>
                        <div class="text-muted"><?= $post['username'] ?></div>
                      </div>
                      <div class="ms-auto">
                        <a href="#" class="text-muted">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                          <?= $post['viewcount'] ?>
                        </a>
                      </div>
                    </div>
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