<!DOCTYPE html>
<html lang="en">
<head>
  <title>Setting Update</title>
  <?php include 'init/style.php'; ?>
</head>
<body>
<div class="modal-blur"  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <form action="/panel/setting_update/<?= $id ?>" method="post" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Setting / Advertising</h5>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" placeholder="title" value="<?= $setting['title'] ?>">
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="mb-3">
                <label class="form-label">Content</label>
                <div class="input-group input-group-flat">
                  <textarea name="content" class="form-control" rows="3"><?= $setting['content'] ?></textarea>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="mb-3">
                <label class="form-label">Value</label>
                <input name="value" type="text" class="form-control" value="<?= $setting['value_setting'] ?>">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="mb-3">
                <label class="form-label">Link</label>
                <input name="link" type="text" class="form-control" value="<?= $setting['link'] ?>">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal" name="btnupdatesetting">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
              stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="12" y1="5" x2="12" y2="19" />
              <line x1="5" y1="12" x2="19" y2="12" />
            </svg> 
            Update
          </button>
        </div>
      </div>
      </form>
    </div>
  </div>
  <?php include 'init/script.php'; ?>
</body>
</html>