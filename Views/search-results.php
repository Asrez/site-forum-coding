<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>result</title>
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
    <?php include "includes/footer.php" ?>

      <div class="page-wrapper">
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Search results
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row g-4">
              <div class="col-9">
                <div class="row row-cards">
                  <?php foreach ($posts as $post) { ?>
                  <div class="col-sm-6 col-lg-4">
                    <div class="card card-sm">
                      <a href="#" class="d-block"><img src="./static/photos/<?= $post['admin_image'] ?>" class="card-img-top"></a>
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <span class="avatar me-3 rounded" style="background-image: url(./static/avatars/000m.jpg)"></span>
                          <div>
                            <div><?= $post['admin_name'] ?></div>
                            <div class="text-muted"><?= $post['title'] ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>

    <?php include "includes/footer.php" ?>

    <script src="./dist/js/tabler.min.js?1668287865" defer></script>
    <script src="./dist/js/demo.min.js?1668287865" defer></script>
  </body>
</html>