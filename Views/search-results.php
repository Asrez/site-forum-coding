<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>result</title>
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
    <?php include "includes/header.php" ?>

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
                <h2>Posts</h2>
                <?php if (empty($posts)) echo "no result"; ?>
                  <?php foreach ($posts as $post) { ?>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/static/photos/<?= $post['image'] ?>" class="card-img-top"></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div>
                              <div><?= $post['title'] ?></div>
                              <div class="text-muted"><?= $post['date'] ?></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                  <br>
                  <h2>Users</h2>
                  <?php if (empty($users)) echo "no result"; ?>
                  <?php foreach ($users as $user) { ?>
                    <div class="col-sm-6 col-lg-4">
                      <div class="card card-sm">
                        <a href="#" class="d-block"><img src="/static/avatars/<?= $user['image'] ?>" class="card-img-top"></a>
                        <div class="card-body">
                          <div class="d-flex align-items-center">
                            <div>
                              <div><?= $user['name'] ?></div>
                              <div class="text-muted"><?= $user['username'] ?></div>
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