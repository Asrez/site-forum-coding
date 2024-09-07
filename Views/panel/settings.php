<!doctype html>
<html lang="en">
  <head>
    <title>Settings</title>
    <?php include "init/style.php"; ?>
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
            <div class="card">
              <div class="row g-0">
              <form action="/panel/update/<?= $user['id'] ?>" method="post" enctype="multipart/form-data">
                <div class="col d-flex flex-column">
                    <di class="card-body">
                      <h2 class="mb-4">My Account</h2>
                      <h3 class="card-title">Profile Details</h3>
                      <div class="row align-items-center">
                        <div class="col-auto"><span class="avatar avatar-xl" style="background-image: url(../static/avatars/<?= $user['image'] ?>)"></span>
                        </div>
                        <div class="col-auto">
                          <input type="file" name="image">
                        </div>
                          <div class="col-auto">
                          <a href="/panel/users/deleteimg/<?= $user['id'] ?>" name="btndelimg">DELETE AVATAR</a>
                      </div>
                      </div>
                      <h3 class="card-title mt-4">Username</h3>
                      <div>
                        <div class="row g-2">
                          <div class="col-auto">
                            <input type="text" class="form-control w-auto" value="<?= $user['username'] ?>" name="username">
                          </div>
                        </div>
                      </div>
                      <h3 class="card-title mt-4">Name</h3>
                      <div>
                        <div class="row g-2">
                          <div class="col-auto">
                            <input type="text" class="form-control w-auto" value="<?= $user['name'] ?>" name="name">
                          </div>
                        </div>
                      </div>
                      <h3 class="card-title mt-4">Email</h3>
                      <div>
                        <div class="row g-2">
                          <div class="col-auto">
                            <input type="email" class="form-control w-auto" value="<?= $user['email'] ?>" name="email">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-footer bg-transparent mt-auto">
                      <div class="btn-list justify-content-end">
                        <button href="/panel" class="btn">
                          Cancel
                        </button>
                        <button type="submit" class="btn btn-primary" name="btnupuser">
                          Submit
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <?php include "init/script.php"; ?>
  </body>
</html>