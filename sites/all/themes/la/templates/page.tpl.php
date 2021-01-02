<body>
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex">
        <a class="navbar-brand brand-logo mr-5" style="padding-left: 40px; padding-top: 20px" href="/">КНС</a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">

      <?php print render($page['header']); ?>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="ti-layout-grid2"></span>
        </button>
    </div>
</nav>
<div class="container-scroller">
    <div>
        <div>
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
                                        <p class="text-muted">Объекты</p>
                                        <h4 class="mb-0 font-weight-bold">1</h4>
                                    </div>
                                    <div class="border-right pr-4 mb-3 mb-xl-0">
                                        <p class="text-muted">Параметры</p>
                                        <h4 class="mb-0 font-weight-bold">8</h4>
                                    </div>
                                    <div class="border-right pr-4 mb-3 mb-xl-0">
                                        <p class="text-muted">Связь</p>
                                        <h4 class="mb-0 font-weight-bold">100%</h4>
                                    </div>
                                    <div class="border-right pr-4 mb-3 mb-xl-0">
                                        <p class="text-muted">Аварии</p>
                                        <h4 class="mb-0 font-weight-bold">±</h4>
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
            <div>
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
