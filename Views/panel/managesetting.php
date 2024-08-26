<!doctype html>
<html lang="en">
  <head>
    <title>Manage setting</title>
    <?php include "init/style.php"; ?>
  </head>
  <body >

  <?php include "includes/header.php"; ?>

      <div class="page-wrapper">
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Manage Advertising
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">advertising</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                      <thead>
                        <tr>
                          <th class="w-1">code</th>
                          <th>title</th>
                          <th>image</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <?php foreach ($advers as $adver) { ?>
                          <td><span class="text-muted"><?= $adver['id'] ?></span></td>
                          <td><?= $adver['title'] ?></a></td>
                          <td>
                          <span class="avatar me-3 rounded" style="background-image: url(./static/setting/<?= $adver['value_setting'] ?>)"></span>
                          </td>
                          <td >
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="/go_setting/<?= $adver['id'] ?>" >
                                    edit
                                  </a>             
                              </div>
                            </span>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
              <div class="col">
                <h2 class="page-title">
                  Manage Site
                </h2>
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Setting</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                      <thead>
                        <tr>
                          <th class="w-1">Code</th>
                          <th>Key</th>
                          <th>Value</th>
                          <th>Link</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <?php foreach ($settings as $setting) { ?>
                          <td><span class="text-muted"><?= $setting['id'] ?></span></td>
                          <td>
                          <?= $setting['key_setting'] ?>
                          </td>
                          <td>
                          <?= $setting['value_setting'] ?>
                          </td>
                          <td>
                          <?= $setting['link'] ?>
                          </td>
                          <td >
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="/go_setting/<?= $setting['id'] ?>" >
                                    edit
                                  </a>             
                              </div>
                            </span>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      <?php include "includes/footer.php"; ?>

      <?php include "init/script.php"; ?>
  </body>
</html>