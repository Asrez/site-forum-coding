<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="/dist/css/tabler.min.css?1668287865" rel="stylesheet" />
  <link href="/dist/css/tabler-flags.min.css?1668287865" rel="stylesheet" />
  <link href="/dist/css/tabler-payments.min.css?1668287865" rel="stylesheet" />
  <link href="/dist/css/tabler-vendors.min.css?1668287865" rel="stylesheet" />
  <link href="/dist/css/demo.min.css?1668287865" rel="stylesheet" />
  <title>update post <?= $id ?></title>
  <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
      --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }
  </style>
</head>
<body>
<div class="modal-blur"  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <form action="/uppost/<?= $this_post['id'] ?>" method="post" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">New Post</h5>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="title" value="<?=$this_post['title'] ?>">
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="mb-3">
                <label class="form-label">Content</label>
                <div class="input-group input-group-flat">
                  <textarea name="content" class="form-control" rows="3">
                    <?=$this_post['content'] ?>
                  </textarea>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="mb-3">
                <label class="form-label">image</label>
                <input name="image" type="file" class="form-control">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-body">
          <div class="row">
            <h3>Admin information</h3>
                <input type="number"  name="admin_id" value="<?= $admin['id'] ?>" style="opacity : 0">
            <div class="col-lg-12">
              <div>
                <label class="form-label">Admin username</label>
                <input class="form-control" type="text" value="<?= $admin['username'] ?>" disabled>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal" name="btnupdate">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
              stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="12" y1="5" x2="12" y2="19" />
              <line x1="5" y1="12" x2="19" y2="12" />
            </svg> 
            Update Post
          </button>
        </div>
      </div>
      </form>
    </div>
  </div>
</body>
</html>