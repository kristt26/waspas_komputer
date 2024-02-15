<!DOCTYPE html>
<html lang="en" ng-app="apps">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Rekomendasi Laptop</title>
  <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/vertical-layout-light/style.css">
  <link rel="shortcut icon" href="<?= base_url() ?>home/images/logo2.png" />
  <link href="https://opensource.propeller.in/components/card/css/card.css" type="text/css" rel="stylesheet" />
  <link href="https://opensource.propeller.in/docs/css/example-docs.css" type="text/css" rel="stylesheet" />
  <link href="https://opensource.propeller.in/components/typography/css/typography.css" type="text/css" rel="stylesheet" />
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://opensource.propeller.in/components/checkbox/css/checkbox.css" type="text/css" rel="stylesheet" />
  <link href="https://opensource.propeller.in/components/textfield/css/textfield.css" type="text/css" rel="stylesheet" />
  <link href="https://opensource.propeller.in/components/radio/css/radio.css" type="text/css" rel="stylesheet" />
  <link href="https://opensource.propeller.in/components/toggle-switch/css/toggle-switch.css" type="text/css" rel="stylesheet" />
</head>

<body>
  <div class="container-scroller">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
          <a class="navbar-brand brand-logo" href="<?= base_url() ?>assets/index.html"><img src="<?= base_url() ?>assets/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="<?= base_url() ?>assets/index.html"><img src="<?= base_url() ?>assets/images/logo-mini.svg" alt="logo" /></a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="typcn typcn-th-menu"></span>
          </button>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-profile">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <!-- <img src="<?= base_url() ?>assets/images/faces/face5.jpg" alt="profile" /> -->
              <a href="<?= base_url('auth/logout')?>" class="btn btn-secondary"><i class="typcn typcn-power"></i>Logout</a>
              <!-- <span class="nav-profile-name"><i class="typcn typcn-power"></i>Logout</span> -->
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="typcn typcn-th-menu"></span>
        </button>
      </div>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="typcn typcn-cog-outline"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close typcn typcn-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close typcn typcn-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove typcn typcn-delete-outline"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="typcn typcn-media-record-outline text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="<?= base_url() ?>assets/images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?= base_url() ?>assets/images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?= base_url() ?>assets/images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?= base_url() ?>assets/images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?= base_url() ?>assets/images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="<?= base_url() ?>assets/images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <?= view("layout/menu") ?>
      <div class="main-panel">
        <div class="content-wrapper">
          <?= $this->renderSection('content'); ?>
        </div>
        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Bootstrap dashboard</a> templates from Bootstrapdash.com</span>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <script src="<?= base_url() ?>assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url() ?>/libs/angular/angular.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-sanitize/1.8.2/angular-sanitize.min.js" integrity="sha512-JkCv2gG5E746DSy2JQlYUJUcw9mT0vyre2KxE2ZuDjNfqG90Bi7GhcHUjLQ2VIAF1QVsY5JMwA1+bjjU5Omabw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/1.0.30/angular-ui-router.min.js" integrity="sha512-HdDqpFK+5KwK5gZTuViiNt6aw/dBc3d0pUArax73z0fYN8UXiSozGNTo3MFx4pwbBPldf5gaMUq/EqposBQyWQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-animate/1.8.2/angular-animate.min.js" integrity="sha512-jZoujmRqSbKvkVDG+hf84/X11/j5TVxwBrcQSKp1W+A/fMxmYzOAVw+YaOf3tWzG/SjEAbam7KqHMORlsdF/eA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="<?= base_url() ?>/js/apps.js"></script>
  <script src="<?= base_url() ?>/js/services/helper.services.js"></script>
  <script src="<?= base_url() ?>/js/services/auth.services.js"></script>
  <script src="<?= base_url() ?>/js/services/admin.services.js"></script>
  <script src="<?= base_url() ?>/js/services/pesan.services.js"></script>
  <script src="<?= base_url() ?>/js/controllers/admin.controllers.js"></script>
  <script src="<?= base_url() ?>/js/components/components.js"></script>
  <script src="<?= base_url() ?>/libs/angular-ui-select2/src/select2.js"></script>
  <script src="<?= base_url() ?>/libs/angular-datatables/dist/angular-datatables.js"></script>
  <script src="<?= base_url() ?>/libs/angular-locale_id-id.js"></script>
  <script src="<?= base_url() ?>/libs/input-mask/angular-input-masks-standalone.min.js"></script>
  <script src="<?= base_url() ?>/libs/jquery.PrintArea.js"></script>
  <script src="<?= base_url() ?>/libs/angular-base64-upload/dist/angular-base64-upload.min.js"></script>
  <script src="<?= base_url() ?>/libs/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="<?= base_url() ?>/libs/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url() ?>/libs/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url() ?>/libs/datatables/dataTables.responsive.min.js"></script>
  <script src="<?= base_url() ?>/libs/datatables/btn.js"></script>
  <script src="<?= base_url() ?>/libs/datatables/print.js"></script>
  <script src="<?= base_url() ?>/libs/loading/dist/loadingoverlay.min.js"></script>
  <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

  <script src="<?= base_url() ?>assets/js/off-canvas.js"></script>
  <script src="<?= base_url() ?>assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url() ?>assets/js/template.js"></script>
  <script src="<?= base_url() ?>assets/js/settings.js"></script>
  <script src="<?= base_url() ?>assets/js/todolist.js"></script>
  <script src="<?= base_url() ?>assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendors/select2/select2.min.js"></script>
  <script src="<?= base_url() ?>assets/js/file-upload.js"></script>
  <script src="<?= base_url() ?>assets/js/typeahead.js"></script>
  <script src="<?= base_url() ?>assets/js/select2.js"></script>
  <script src="https://opensource.propeller.in/components/global/js/global.js"></script>
  <script type="text/javascript" src="https://opensource.propeller.in/components/checkbox/js/checkbox.js"></script>
  <script type="text/javascript" src="https://opensource.propeller.in/components/textfield/js/textfield.js"></script>
  <script type="text/javascript" src="https://opensource.propeller.in/components/radio/js/radio.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>