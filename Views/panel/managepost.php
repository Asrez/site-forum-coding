<!doctype html>
<html lang="en">
  <head>
    <title>Manage posts</title>
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
                  Manage posts
                </h2>
              </div>
              <div class="col-auto ms-auto d-print-none">
                <div class="d-flex">
                  <form action="/panel/searchpost" method="post">
                  <input type="search" class="form-control d-inline-block w-9 me-3" placeholder="Search post…" name="searchbox"/>
                  </form>
                  <a class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                  data-bs-target="#modal-report" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                    New Post
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
                          <th class="w-1">Code</th>
                          <th>Title</th>
                          <th>Created</th>
                          <th>Status</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <?php foreach ($posts as $post) { ?>
                          <td><span class="text-muted"><?= $post['id'] ?></span></td>
                          <td><a href="/posts/<?= $post['id'] ?>"><?= $post['title'] ?></a></td>
                          <td>
                          <?= $post['date'] ?>
                          </td>
                          <td>
                            <span class="badge 
                            <?php if ($post['state'] === 1) {
                                echo ' bg-success ';
                            } ?>
                             me-1"></span>
                            <?php if ($post['state'] === 1) {
                                echo 'confirmed';
                            } else {
                                echo 'not confirmed';
                            } ?>
                          </td>
                          <td >
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu">
                                  <a class="dropdown-item" href="/manage/post/update/<?= $post['id'] ?>" >
                                    Update
                                  </a>
                                  <a class="dropdown-item" href="/manage/post/delete/<?= $post['id'] ?>">
                                    Delete
                                  </a> 
                                  <?php if ($post['state'] === 0) { ?> 
                                    <a class="dropdown-item" href="/manage/post/confirm/<?= $post['id'] ?>">
                                    Confirmed
                                  </a>
                                 <?php } ?>             
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
        
      <?php include 'includes/footer.php'; ?>

      <?php include 'init/script.php'; ?>
  </body>
</html>