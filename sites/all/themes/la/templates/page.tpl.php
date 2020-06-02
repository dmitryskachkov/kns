<body>
<div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div class="container">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <a class="navbar-brand brand-logo" href="/"
                       style="color: #ffffff">КНС</a>
                    <a class="navbar-brand brand-logo-mini"
                       href="/">КНС</a>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center"
                            type="button" data-toggle="horizontal-menu-toggle">
                        <span class="ti-menu"></span>
                    </button>
                </div>
            </div>
        </nav>
        <nav class="bottom-navbar">
            <div class="container">
              <?php print render($page['header']); ?>
            </div>
        </nav>
    </div>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-12 col-xl-5 mb-4 mb-xl-0">
                                <h4 class="font-weight-bold"><?php print $title; ?></h4>
                                <h4 class="small">Канализационные насосные станции</h4>
                            </div>
                            <div class="col-12 col-xl-7">
                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                    <div class="border-right pr-4 mb-3 mb-xl-0">
                                        <p class="text-muted">Объектов</p>
                                        <h4 class="mb-0 font-weight-bold">
                                            <?php print $unit_count ?></h4>
                                    </div>
                                    <div class="border-right pr-4 mb-3 mb-xl-0">
                                        <p class="text-muted">Последний опрос</p>
                                        <h4 class="mb-0 font-weight-bold">
                                            23.03.2020</h4>
                                    </div>

                                    <div class="pr-3 mb-3 mb-xl-0">
                                        <p class="text-muted">Тэгов</p>
                                        <h4 class="mb-0 font-weight-bold">
                                          <?php print $tag_count ?></h4>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


              <?php if ($messages): ?>
                  <div class="row">
                      <div class="col-md-12 grid-margin stretch-card">
                          <div class="card">

                              <div class="card-body">
                                  <div id="messages">
                                      <div class="section clearfix">
                                        <?php print $messages; ?>
                                      </div>
                                  </div> <!-- /.section, /#messages -->
                              </div>
                          </div>
                      </div>
                  </div>
              <?php endif; ?>
              <?php print render($page['content']); ?>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <div class="container">
                <footer class="footer">
                    <div class="w-100 clearfix"><span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Разработано в СГМУП ГВК</span>
                    </div>
                </footer>
            </div>

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->


</body>
