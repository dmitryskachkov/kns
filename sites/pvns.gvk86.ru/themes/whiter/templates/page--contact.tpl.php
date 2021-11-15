
<div class="clearfix"></div>
<div class="container-scroller">
    <!-- partial:partials/_horizontal-navbar.html -->
    <div class="horizontal-menu">
        <nav class="navbar top-navbar col-lg-12 col-12 p-0">
            <div class="container">
                <div class="navbar-brand-wrapper">
                     <span id="burger" class="d-block d-lg-none text-right" style="position: fixed; right: 20px; top: 20px">
                       <p><a style="font-size: 30px; padding-top: 0" id="nav-expand-link">=</a></p>
                         <div id="mobile-menu">
                            <ul class="mobile-ul">
                                <li>
                                    <a href="/">Панель управления</a>
                                    <p class="small">Основная информация по вашему счету</p>
                                </li>
                                  <li> <a href="/payment/history">Начисления</a>
                                  <p class="small">Информация о начислениях</p>
                                 </li>
                                <li> <a href="/pay">Оплата</a>
                                 <p class="small">Оплата онлайн картой банка</p>
                                </li>
                                <li>  <a href="/meters">Приборы учета</a>
                                   <p class="small">Передача показаний ваших приборов</p>
                                </li>
                                 <li>  <a href="/contact">Обратная связь</a>
                                   <p class="small">Обращение в абонентский отдел</p>
                                </li>
                                <li>  <a href="/user/logout">Выход</a>
                                   <p class="small">Выход из личного кабинета</p>
                                </li>
                            </ul>
                        </div>
                    </span>
                    <h5 class="d-block d-sm-none" style="margin-top: 15px">Личный кабинет</h5>
                    <p class="d-block d-sm-none small" style="margin-top: -5px">Для физических лиц</p>
                    <div class="text-left navbar-brand-wrapper">
                        <a class="navbar-brand brand-logo " href="/">Личный кабинет</a>
                    </div>
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

                <div class="dashboard-header d-flex flex-column grid-margin d-none d-sm-block">
                    <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3" id="submenu-line">
                        <div class="button-wrapper d-flex align-items-center mt-md-3 mt-xl-0 ">

                            <a href="/meters/send" class="btn btn-sm btn-primary float-right">
                                Передать показания
                            </a>

                        </div>
                        <div class="d-flex align-items-center">
                            <h4 class="mb-0 font-weight-bold"><?php print $title; ?></h4>
                        </div>

                    </div>
                    <div class="d-md-flex align-items-center justify-content-between flex-wrap d-none d-sm-block">
                        <div class="d-flex align-items-center">
                            <p class="mb-0 font-weight-medium mr-2 d-none d-md-block">
                                Панель управления</p>

                        </div>
                        <div class="d-flex mt-3 mt-lg-0">
                            <div class="d-none d-md-flex">
                                <a href="/contact" class="btn btn-outline-dark btn-sm" style="margin-right: 20px">Обратная связь</a>
                                <a href="/user/logout" class="btn btn-outline-dark btn-sm" style="margin-left: 20px">
                                    Выйти из личного кабинета
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
              <?php if ($messages): ?>
                  <div id="messages"><div class="section clearfix">
                      <?php print $messages; ?>
                      </div></div> <!-- /.section, /#messages -->
              <?php endif; ?>
              <?php print render($page['content']); ?>

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="container clearfix">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Разработано в СГМУП "ГВК". </span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Техническая поддержка. Служба АСУП</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

