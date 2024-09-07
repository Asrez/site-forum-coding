<!doctype html>

<html lang="en">
  <head>
    <title>Users</title>
    <?php include 'init/style.php'; ?>
  </head>
  <body >

    <?php include 'includes/header.php'; ?>

      <div class="page-wrapper">
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Users
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row justify-content-center">
              <div class="col-8">
                <div class="card">
                  <div class="card-body">
                    <div class="divide-y">
                     <?php foreach ($users as $user) { ?>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(../static/avatars/<?= $user['image'] ?>)" ></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                              <strong><?= $user['username'] ?></strong>
                            </div>
                            <div class="text-muted"><?= $user['name'] ?></div>
                          </div>
                        </div>
                      </div>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    <?php include 'includes/footer.php'; ?>

    <?php include 'init/script.php'; ?>
  </body>
</html>