<!doctype html>
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
  <title>Index</title>
  <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
      --tblr-font-sans-serif: Inter, -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }
  </style>
</head>

<body>

  <?php include "includes/header.php"; ?>
  
  <div class="page-wrapper">
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <div class="page-pretitle">
              Overview
            </div>
            <h2 class="page-title">
              Dashboard
            </h2>
          </div>
          <div class="col-auto ms-auto d-print-none">
            <div class="btn-list">
              <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                data-bs-target="#modal-report">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <line x1="12" y1="5" x2="12" y2="19" />
                  <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
                Create new post
              </a>
              <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                data-bs-target="#modal-report" aria-label="Create new report">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <line x1="12" y1="5" x2="12" y2="19" />
                  <line x1="5" y1="12" x2="19" y2="12" />
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
      <div class="container-xl">
        <div class="row row-deck row-cards">
          <div class="col-12">
            <div class="row row-cards">
              <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span
                          class="bg-yellow text-white avatar">
                           <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="9" cy="7" r="4" /><path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /><path d="M21 21v-2a4 4 0 0 0 -3 -3.85" /></svg>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M16.7 8a3 3 0 0 0 -2.7 -2h-4a3 3 0 0 0 0 6h4a3 3 0 0 1 0 6h-4a3 3 0 0 1 -2.7 -2" />
                            <path d="M12 3v3m0 12v3" />
                          </svg>
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          users
                        </div>
                        <div class="text-muted">
                          <?= $countuser ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span
                          class="bg-pink text-white avatar">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="3" />
                          <path d="M12 2a3 3 0 0 1 3 3c0 .562 -.259 1.442 -.776 2.64l-.724 1.36l1.76 -1.893c.499 -.6 .922 -1.002 1.27 -1.205a2.968 2.968 0 0 1 4.07 1.099a3.011 3.011 0 0 1 -1.09 4.098c-.374 .217 -.99 .396 -1.846 .535l-2.664 .366l2.4 .326c.995 .145 1.698 .337 2.11 .576a3.011 3.011 0 0 1 1.09 4.098a2.968 2.968 0 0 1 -4.07 1.098c-.348 -.202 -.771 -.604 -1.27 -1.205l-1.76 -1.893l.724 1.36c.516 1.199 .776 2.079 .776 2.64a3 3 0 0 1 -6 0c0 -.562 .259 -1.442 .776 -2.64l.724 -1.36l-1.76 1.893c-.499 .601 -.922 1.003 -1.27 1.205a2.968 2.968 0 0 1 -4.07 -1.098a3.011 3.011 0 0 1 1.09 -4.098c.374 -.218 .99 -.396 1.846 -.536l2.664 -.366l-2.4 -.325c-.995 -.145 -1.698 -.337 -2.11 -.576a3.011 3.011 0 0 1 -1.09 -4.099a2.968 2.968 0 0 1 4.07 -1.099c.348 .203 .771 .604 1.27 1.205l1.76 1.894c-1 -2.292 -1.5 -3.625 -1.5 -4a3 3 0 0 1 3 -3z" /></svg>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <circle cx="6" cy="19" r="2" />
                            <circle cx="17" cy="19" r="2" />
                            <path d="M17 17h-11v-14h-2" />
                            <path d="M6 5l14 1l-1 7h-13" />
                          </svg>
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          posts
                        </div>
                        <div class="text-muted">
                          <?= $countpost ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span
                          class="bg-green text-white avatar">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="2" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path
                              d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c-.002 -.249 1.51 -2.772 1.818 -4.013z" />
                          </svg>
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          viewcounts
                        </div>
                        <div class="text-muted">
                          <?= $countview ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="card card-sm">
                  <div class="card-body">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <span
                          class="bg-red text-white avatar">
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                           viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path 
                          d="M19.5 12.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3" />
                          </svg>
                        </span>
                      </div>
                      <div class="col">
                        <div class="font-weight-medium">
                          Likes
                        </div>
                        <div class="text-muted">
                        <?= $countlike ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Traffic summary</h3>
                <div id="chart-mentions" class="chart-lg"></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Locations</h3>
                <div class="ratio ratio-21x9">
                  <div>
                    <div id="map-world" class="w-100 h-100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row row-cards">
              <div class="col-12">
                <div class="card" style="height: 28rem">
                  <div class="card-body card-body-scrollable card-body-scrollable-shadow">
                    <div class="divide-y">
                      <?php foreach ($users as $user){ ?>
                      <div>
                        <div class="row">
                          <div class="col-auto">
                            <span class="avatar" style="background-image: url(./static/avatars/<?= $user['image'] ?>)"></span>
                          </div>
                          <div class="col">
                            <div class="text-truncate">
                             name : <strong><?= $user['name'] ?></strong>  , username : <strong><?= $user['username'] ?></strong>
                            </div>
                            <div class="text-muted"><?= $user['email'] ?></div>
                          </div>
                          <div class="col-auto align-self-center">
                            <div class="badge bg-primary"></div>
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
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header border-0">
                <div class="card-title">Development activity</div>
              </div>
              <div class="position-relative">
                <div class="position-absolute top-0 left-0 px-3 mt-1 w-75">
                  <div class="row g-2">
                    <div class="col-auto">
                      <div class="chart-sparkline chart-sparkline-square" id="sparkline-activity"></div>
                    </div>
                    <div class="col">
                      <div>Today's Earning: $4,262.40</div>
                      <div class="text-muted"><!-- Download SVG icon from http://tabler-icons.io/i/trending-up -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline text-green" width="24"
                          height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                          stroke-linecap="round" stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <polyline points="3 17 9 11 13 15 21 7" />
                          <polyline points="14 7 21 7 21 14" />
                        </svg>
                        +5% more than yesterday
                      </div>
                    </div>
                  </div>
                </div>
                <div id="chart-development-activity"></div>
              </div>
              <div class="card-table table-responsive">
                <table class="table table-vcenter">
                  <thead>
                    <tr>
                      <th>User</th>
                      <th>Commit</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="w-1">
                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                      </td>
                      <td class="td-truncate">
                        <div class="text-truncate">
                          Fix dart Sass compatibility (#29755)
                        </div>
                      </td>
                      <td class="text-nowrap text-muted">28 Nov 2019</td>
                    </tr>
                    <tr>
                      <td class="w-1">
                        <span class="avatar avatar-sm">JL</span>
                      </td>
                      <td class="td-truncate">
                        <div class="text-truncate">
                          Change deprecated html tags to text decoration classes (#29604)
                        </div>
                      </td>
                      <td class="text-nowrap text-muted">27 Nov 2019</td>
                    </tr>
                    <tr>
                      <td class="w-1">
                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/002m.jpg)"></span>
                      </td>
                      <td class="td-truncate">
                        <div class="text-truncate">
                          justify-content:between ⇒ justify-content:space-between (#29734)
                        </div>
                      </td>
                      <td class="text-nowrap text-muted">26 Nov 2019</td>
                    </tr>
                    <tr>
                      <td class="w-1">
                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003m.jpg)"></span>
                      </td>
                      <td class="td-truncate">
                        <div class="text-truncate">
                          Update change-version.js (#29736)
                        </div>
                      </td>
                      <td class="text-nowrap text-muted">26 Nov 2019</td>
                    </tr>
                    <tr>
                      <td class="w-1">
                        <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000f.jpg)"></span>
                      </td>
                      <td class="td-truncate">
                        <div class="text-truncate">
                          Regenerate package-lock.json (#29730)
                        </div>
                      </td>
                      <td class="text-nowrap text-muted">25 Nov 2019</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card card-md">
              <div class="card-stamp card-stamp-lg">
                <div class="card-stamp-icon bg-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                    stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                      d="M5 11a7 7 0 0 1 14 0v7a1.78 1.78 0 0 1 -3.1 1.4a1.65 1.65 0 0 0 -2.6 0a1.65 1.65 0 0 1 -2.6 0a1.65 1.65 0 0 0 -2.6 0a1.78 1.78 0 0 1 -3.1 -1.4v-7" />
                    <line x1="10" y1="10" x2="10.01" y2="10" />
                    <line x1="14" y1="10" x2="14.01" y2="10" />
                    <path d="M10 14a3.5 3.5 0 0 0 4 0" />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 col-lg-8">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Most Visited Pages</h3>
              </div>
              <div class="card-table table-responsive">
                <table class="table table-vcenter">
                  <thead>
                    <tr>
                      <th>Page name</th>
                      <th>Visitors</th>
                      <th>Unique</th>
                      <th colspan="2">Bounce rate</th>
                    </tr>
                  </thead>
                  <tr>
                    <td>
                      /
                      <a href="#" class="ms-1"
                        aria-label="Open website">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                          <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                        </svg>
                      </a>
                    </td>
                    <td class="text-muted">4,896</td>
                    <td class="text-muted">3,654</td>
                    <td class="text-muted">82.54%</td>
                    <td class="text-end w-1">
                      <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-1"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      /form-elements.html
                      <a href="#" class="ms-1"
                        aria-label="Open website">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                          <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                        </svg>
                      </a>
                    </td>
                    <td class="text-muted">3,652</td>
                    <td class="text-muted">3,215</td>
                    <td class="text-muted">76.29%</td>
                    <td class="text-end w-1">
                      <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-2"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      /index.html
                      <a href="#" class="ms-1"
                        aria-label="Open website">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                          <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                        </svg>
                      </a>
                    </td>
                    <td class="text-muted">3,256</td>
                    <td class="text-muted">2,865</td>
                    <td class="text-muted">72.65%</td>
                    <td class="text-end w-1">
                      <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-3"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      /icons.html
                      <a href="#" class="ms-1"
                        aria-label="Open website">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                          <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                        </svg>
                      </a>
                    </td>
                    <td class="text-muted">986</td>
                    <td class="text-muted">865</td>
                    <td class="text-muted">44.89%</td>
                    <td class="text-end w-1">
                      <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-4"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      /docs/
                      <a href="#" class="ms-1"
                        aria-label="Open website">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                          <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                        </svg>
                      </a>
                    </td>
                    <td class="text-muted">912</td>
                    <td class="text-muted">822</td>
                    <td class="text-muted">41.12%</td>
                    <td class="text-end w-1">
                      <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-5"></div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      /accordion.html
                      <a href="#" class="ms-1"
                        aria-label="Open website">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                          stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                          stroke-linejoin="round">
                          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                          <path d="M10 14a3.5 3.5 0 0 0 5 0l4 -4a3.5 3.5 0 0 0 -5 -5l-.5 .5" />
                          <path d="M14 10a3.5 3.5 0 0 0 -5 0l-4 4a3.5 3.5 0 0 0 5 5l.5 -.5" />
                        </svg>
                      </a>
                    </td>
                    <td class="text-muted">855</td>
                    <td class="text-muted">798</td>
                    <td class="text-muted">32.65%</td>
                    <td class="text-end w-1">
                      <div class="chart-sparkline chart-sparkline-sm" id="sparkline-bounce-rate-6"></div>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="https://github.com/sponsors/codecalm" class="card card-sponsor" target="_blank" rel="noopener"
              style="background-image: url(./static/sponsor-banner-homepage.svg)" aria-label="Sponsor Tabler!">
              <div class="card-body"></div>
            </a>
          </div>

          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Posts</h3>
              </div>
              <div class="table-responsive">
                <table class="table card-table table-vcenter text-nowrap datatable">
                  <thead>
                    <tr>
                      <th class="w-1">code</th>
                      <th>title</th>
                      <th>date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($posts as $post) { ?>
                    <tr>
                      <td><span class="text-muted"><?= $post['id'] ?></span></td>
                      <td>
                        <?= $post['title'] ?>
                      </td>
                      <td>
                      <?= $post['date'] ?>
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

  <div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <form action="/inpost" method="post" enctype="multipart/form-data">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">New post</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <h3>post information</h3>
          <div class="mb-3">
            <label class="form-label">title</label>
            <input type="text" class="form-control" name="title" placeholder="title">
          </div>
          <div class="row">
            <div class="col-lg-8">
              <div class="mb-3">
                <label class="form-label">content</label>
                <div class="input-group input-group-flat">
                  <textarea name="content" class="form-control" rows="3">

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
            <h3>admin information</h3>
                <input type="number"  name="admin_id" value="<?= $admin['id'] ?>" style="opacity : 0">
            <div class="col-lg-12">
              <div>
                <label class="form-label">admin username</label>
                <input class="form-control" type="text" value="<?= $admin['username'] ?>" disabled>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <a href="" class="btn btn-link link-secondary" data-bs-dismiss="modal">
            Cancel
          </a>
          <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal" name="btninpost">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
              stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <line x1="12" y1="5" x2="12" y2="19" />
              <line x1="5" y1="12" x2="19" y2="12" />
            </svg> 
            Create new post
          </button>
        </div>
      </div>
      </form>
    </div>
  </div>
  <!-- Libs JS -->
  <script src="./dist/libs/apexcharts/dist/apexcharts.min.js?1668287865" defer></script>
  <script src="./dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1668287865" defer></script>
  <script src="./dist/libs/jsvectormap/dist/maps/world.js?1668287865" defer></script>
  <script src="./dist/libs/jsvectormap/dist/maps/world-merc.js?1668287865" defer></script>
  <!-- Tabler Core -->
  <script src="./dist/js/tabler.min.js?1668287865" defer></script>
  <script src="./dist/js/demo.min.js?1668287865" defer></script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.ApexCharts && (new ApexCharts(document.getElementById('chart-revenue-bg'), {
        chart: {
          type: "area",
          fontFamily: 'inherit',
          height: 40.0,
          sparkline: {
            enabled: true
          },
          animations: {
            enabled: false
          },
        },
        dataLabels: {
          enabled: false,
        },
        fill: {
          opacity: .16,
          type: 'solid'
        },
        stroke: {
          width: 2,
          lineCap: "round",
          curve: "smooth",
        },
        series: [{
          name: "Profits",
          data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
        }],
        tooltip: {
          theme: 'dark'
        },
        grid: {
          strokeDashArray: 4,
        },
        xaxis: {
          labels: {
            padding: 0,
          },
          tooltip: {
            enabled: false
          },
          axisBorder: {
            show: false,
          },
          type: 'datetime',
        },
        yaxis: {
          labels: {
            padding: 4
          },
        },
        labels: [
          '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
        ],
        colors: [tabler.getColor("primary")],
        legend: {
          show: false,
        },
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.ApexCharts && (new ApexCharts(document.getElementById('chart-new-clients'), {
        chart: {
          type: "line",
          fontFamily: 'inherit',
          height: 40.0,
          sparkline: {
            enabled: true
          },
          animations: {
            enabled: false
          },
        },
        fill: {
          opacity: 1,
        },
        stroke: {
          width: [2, 1],
          dashArray: [0, 3],
          lineCap: "round",
          curve: "smooth",
        },
        series: [{
          name: "May",
          data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67]
        }, {
          name: "April",
          data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35, 41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37]
        }],
        tooltip: {
          theme: 'dark'
        },
        grid: {
          strokeDashArray: 4,
        },
        xaxis: {
          labels: {
            padding: 0,
          },
          tooltip: {
            enabled: false
          },
          type: 'datetime',
        },
        yaxis: {
          labels: {
            padding: 4
          },
        },
        labels: [
          '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
        ],
        colors: [tabler.getColor("primary"), tabler.getColor("gray-600")],
        legend: {
          show: false,
        },
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.ApexCharts && (new ApexCharts(document.getElementById('chart-active-users'), {
        chart: {
          type: "bar",
          fontFamily: 'inherit',
          height: 40.0,
          sparkline: {
            enabled: true
          },
          animations: {
            enabled: false
          },
        },
        plotOptions: {
          bar: {
            columnWidth: '50%',
          }
        },
        dataLabels: {
          enabled: false,
        },
        fill: {
          opacity: 1,
        },
        series: [{
          name: "Profits",
          data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67]
        }],
        tooltip: {
          theme: 'dark'
        },
        grid: {
          strokeDashArray: 4,
        },
        xaxis: {
          labels: {
            padding: 0,
          },
          tooltip: {
            enabled: false
          },
          axisBorder: {
            show: false,
          },
          type: 'datetime',
        },
        yaxis: {
          labels: {
            padding: 4
          },
        },
        labels: [
          '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
        ],
        colors: [tabler.getColor("primary")],
        legend: {
          show: false,
        },
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.ApexCharts && (new ApexCharts(document.getElementById('chart-mentions'), {
        chart: {
          type: "bar",
          fontFamily: 'inherit',
          height: 240,
          parentHeightOffset: 0,
          toolbar: {
            show: false,
          },
          animations: {
            enabled: false
          },
          stacked: true,
        },
        plotOptions: {
          bar: {
            columnWidth: '50%',
          }
        },
        dataLabels: {
          enabled: false,
        },
        fill: {
          opacity: 1,
        },
        series: [{
          name: "Web",
          data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24, 29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6]
        }, {
          name: "Social",
          data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4, 6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0]
        }, {
          name: "Other",
          data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1, 2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6]
        }],
        tooltip: {
          theme: 'dark'
        },
        grid: {
          padding: {
            top: -20,
            right: 0,
            left: -4,
            bottom: -4
          },
          strokeDashArray: 4,
          xaxis: {
            lines: {
              show: true
            }
          },
        },
        xaxis: {
          labels: {
            padding: 0,
          },
          tooltip: {
            enabled: false
          },
          axisBorder: {
            show: false,
          },
          type: 'datetime',
        },
        yaxis: {
          labels: {
            padding: 4
          },
        },
        labels: [
          '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19', '2020-07-20', '2020-07-21', '2020-07-22', '2020-07-23', '2020-07-24', '2020-07-25', '2020-07-26'
        ],
        colors: [tabler.getColor("primary"), tabler.getColor("primary", 0.8), tabler.getColor("green", 0.8)],
        legend: {
          show: false,
        },
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:on
    document.addEventListener("DOMContentLoaded", function () {
      const map = new jsVectorMap({
        selector: '#map-world',
        map: 'world',
        backgroundColor: 'transparent',
        regionStyle: {
          initial: {
            fill: tabler.getColor('body-bg'),
            stroke: tabler.getColor('border-color'),
            strokeWidth: 2,
          }
        },
        zoomOnScroll: false,
        zoomButtons: false,
        // -------- Series --------
        visualizeData: {
          scale: [tabler.getColor('bg-surface'), tabler.getColor('primary')],
          values: { "AF": 16, "AL": 11, "DZ": 158, "AO": 85, "AG": 1, "AR": 351, "AM": 8, "AU": 1219, "AT": 366, "AZ": 52, "BS": 7, "BH": 21, "BD": 105, "BB": 3, "BY": 52, "BE": 461, "BZ": 1, "BJ": 6, "BT": 1, "BO": 19, "BA": 16, "BW": 12, "BR": 2023, "BN": 11, "BG": 44, "BF": 8, "BI": 1, "KH": 11, "CM": 21, "CA": 1563, "CV": 1, "CF": 2, "TD": 7, "CL": 199, "CN": 5745, "CO": 283, "KM": 0, "CD": 12, "CG": 11, "CR": 35, "CI": 22, "HR": 59, "CY": 22, "CZ": 195, "DK": 304, "DJ": 1, "DM": 0, "DO": 50, "EC": 61, "EG": 216, "SV": 21, "GQ": 14, "ER": 2, "EE": 19, "ET": 30, "FJ": 3, "FI": 231, "FR": 2555, "GA": 12, "GM": 1, "GE": 11, "DE": 3305, "GH": 18, "GR": 305, "GD": 0, "GT": 40, "GN": 4, "GW": 0, "GY": 2, "HT": 6, "HN": 15, "HK": 226, "HU": 132, "IS": 12, "IN": 1430, "ID": 695, "IR": 337, "IQ": 84, "IE": 204, "IL": 201, "IT": 2036, "JM": 13, "JP": 5390, "JO": 27, "KZ": 129, "KE": 32, "KI": 0, "KR": 986, "KW": 117, "KG": 4, "LA": 6, "LV": 23, "LB": 39, "LS": 1, "LR": 0, "LY": 77, "LT": 35, "LU": 52, "MK": 9, "MG": 8, "MW": 5, "MY": 218, "MV": 1, "ML": 9, "MT": 7, "MR": 3, "MU": 9, "MX": 1004, "MD": 5, "MN": 5, "ME": 3, "MA": 91, "MZ": 10, "MM": 35, "NA": 11, "NP": 15, "NL": 770, "NZ": 138, "NI": 6, "NE": 5, "NG": 206, "NO": 413, "OM": 53, "PK": 174, "PA": 27, "PG": 8, "PY": 17, "PE": 153, "PH": 189, "PL": 438, "PT": 223, "QA": 126, "RO": 158, "RU": 1476, "RW": 5, "WS": 0, "ST": 0, "SA": 434, "SN": 12, "RS": 38, "SC": 0, "SL": 1, "SG": 217, "SK": 86, "SI": 46, "SB": 0, "ZA": 354, "ES": 1374, "LK": 48, "KN": 0, "LC": 1, "VC": 0, "SD": 65, "SR": 3, "SZ": 3, "SE": 444, "CH": 522, "SY": 59, "TW": 426, "TJ": 5, "TZ": 22, "TH": 312, "TL": 0, "TG": 3, "TO": 0, "TT": 21, "TN": 43, "TR": 729, "TM": 0, "UG": 17, "UA": 136, "AE": 239, "GB": 2258, "US": 4624, "UY": 40, "UZ": 37, "VU": 0, "VE": 285, "VN": 101, "YE": 30, "ZM": 15, "ZW": 5 },
        },
      });
      window.addEventListener("resize", () => {
        map.updateSize();
      });
    });
    // @formatter:off
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-activity'), {
        chart: {
          type: "radialBar",
          fontFamily: 'inherit',
          height: 40,
          width: 40,
          animations: {
            enabled: false
          },
          sparkline: {
            enabled: true
          },
        },
        tooltip: {
          enabled: false,
        },
        plotOptions: {
          radialBar: {
            hollow: {
              margin: 0,
              size: '75%'
            },
            track: {
              margin: 0
            },
            dataLabels: {
              show: false
            }
          }
        },
        colors: [tabler.getColor("blue")],
        series: [35],
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.ApexCharts && (new ApexCharts(document.getElementById('chart-development-activity'), {
        chart: {
          type: "area",
          fontFamily: 'inherit',
          height: 192,
          sparkline: {
            enabled: true
          },
          animations: {
            enabled: false
          },
        },
        dataLabels: {
          enabled: false,
        },
        fill: {
          opacity: .16,
          type: 'solid'
        },
        stroke: {
          width: 2,
          lineCap: "round",
          curve: "smooth",
        },
        series: [{
          name: "Purchases",
          data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15, 14, 25, 32, 40, 55, 60, 48, 52, 70]
        }],
        tooltip: {
          theme: 'dark'
        },
        grid: {
          strokeDashArray: 4,
        },
        xaxis: {
          labels: {
            padding: 0,
          },
          tooltip: {
            enabled: false
          },
          axisBorder: {
            show: false,
          },
          type: 'datetime',
        },
        yaxis: {
          labels: {
            padding: 4
          },
        },
        labels: [
          '2020-06-20', '2020-06-21', '2020-06-22', '2020-06-23', '2020-06-24', '2020-06-25', '2020-06-26', '2020-06-27', '2020-06-28', '2020-06-29', '2020-06-30', '2020-07-01', '2020-07-02', '2020-07-03', '2020-07-04', '2020-07-05', '2020-07-06', '2020-07-07', '2020-07-08', '2020-07-09', '2020-07-10', '2020-07-11', '2020-07-12', '2020-07-13', '2020-07-14', '2020-07-15', '2020-07-16', '2020-07-17', '2020-07-18', '2020-07-19'
        ],
        colors: [tabler.getColor("primary")],
        legend: {
          show: false,
        },
        point: {
          show: false
        },
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-1'), {
        chart: {
          type: "line",
          fontFamily: 'inherit',
          height: 24,
          animations: {
            enabled: false
          },
          sparkline: {
            enabled: true
          },
        },
        tooltip: {
          enabled: false,
        },
        stroke: {
          width: 2,
          lineCap: "round",
        },
        series: [{
          color: tabler.getColor("primary"),
          data: [17, 24, 20, 10, 5, 1, 4, 18, 13]
        }],
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-2'), {
        chart: {
          type: "line",
          fontFamily: 'inherit',
          height: 24,
          animations: {
            enabled: false
          },
          sparkline: {
            enabled: true
          },
        },
        tooltip: {
          enabled: false,
        },
        stroke: {
          width: 2,
          lineCap: "round",
        },
        series: [{
          color: tabler.getColor("primary"),
          data: [13, 11, 19, 22, 12, 7, 14, 3, 21]
        }],
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-3'), {
        chart: {
          type: "line",
          fontFamily: 'inherit',
          height: 24,
          animations: {
            enabled: false
          },
          sparkline: {
            enabled: true
          },
        },
        tooltip: {
          enabled: false,
        },
        stroke: {
          width: 2,
          lineCap: "round",
        },
        series: [{
          color: tabler.getColor("primary"),
          data: [10, 13, 10, 4, 17, 3, 23, 22, 19]
        }],
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-4'), {
        chart: {
          type: "line",
          fontFamily: 'inherit',
          height: 24,
          animations: {
            enabled: false
          },
          sparkline: {
            enabled: true
          },
        },
        tooltip: {
          enabled: false,
        },
        stroke: {
          width: 2,
          lineCap: "round",
        },
        series: [{
          color: tabler.getColor("primary"),
          data: [6, 15, 13, 13, 5, 7, 17, 20, 19]
        }],
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-5'), {
        chart: {
          type: "line",
          fontFamily: 'inherit',
          height: 24,
          animations: {
            enabled: false
          },
          sparkline: {
            enabled: true
          },
        },
        tooltip: {
          enabled: false,
        },
        stroke: {
          width: 2,
          lineCap: "round",
        },
        series: [{
          color: tabler.getColor("primary"),
          data: [2, 11, 15, 14, 21, 20, 8, 23, 18, 14]
        }],
      })).render();
    });
    // @formatter:on
  </script>
  <script>
    // @formatter:off
    document.addEventListener("DOMContentLoaded", function () {
      window.ApexCharts && (new ApexCharts(document.getElementById('sparkline-bounce-rate-6'), {
        chart: {
          type: "line",
          fontFamily: 'inherit',
          height: 24,
          animations: {
            enabled: false
          },
          sparkline: {
            enabled: true
          },
        },
        tooltip: {
          enabled: false,
        },
        stroke: {
          width: 2,
          lineCap: "round",
        },
        series: [{
          color: tabler.getColor("primary"),
          data: [22, 12, 7, 14, 3, 21, 8, 23, 18, 14]
        }],
      })).render();
    });
    // @formatter:on
  </script>
</body>

</html>