<!doctype html>
<html lang="en">
  <head>
    <title>Manage users</title>
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
                  Users
                </h2>
              </div>
              <div class="col-auto ms-auto d-print-none">
                <div class="d-flex">
                <form action="/panel/users/search" method="post">
                  <input type="search" class="form-control d-inline-block w-9 me-3" placeholder="Search post…" name="searchbox"/>
                  </form>                  <a href="/panel/users/creat" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                    New User
                  </a>
                </div>
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
                    <h3 class="card-title">Posts</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                      <thead>
                        <tr>
                          <th>Image</th>
                          <th class="w-1">Code</th>
                          <th>Name</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <?php foreach ($users as $user) { ?>
                          <td> <span class="avatar me-3 rounded" style="background-image: url(../static/avatars/<?= $user['image'] ?>)"></span></td>
                          <td><span class="text-muted"><?= $user['id'] ?></span></td>
                          <td><?= $user['name'] ?></td>
                          <td><?= $user['username'] ?></td>
                          <td><?= $user['email'] ?></td>
                          <td>
                            <span class="badge 
                            <?php if ($user['state'] === 1) echo " bg-success "; ?>
                             me-1"></span>
                            <?php if ($user['state'] === 1) echo "admin";
                                  else echo "user"; ?>
                          </td>
                          <td >
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="/panel/users/update/<?= $user['id'] ?>" >
                                    Update
                                  </a>
                                  <a class="dropdown-item" href="/panel/users/deleteuser/<?= $user['id'] ?>">
                                    Delete
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