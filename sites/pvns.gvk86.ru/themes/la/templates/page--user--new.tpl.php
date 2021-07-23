<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
            <div class="row flex-grow">
                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                    <div class="auth-form-transparent text-left p-3">
                        <div class="brand-logo">

                        </div>
                        <h4>Регистрация</h4>
                        <h6 class="font-weight-light">В личном кабинете для физических лиц</h6>
                      <?php if ($messages): ?>
                          <div id="messages"><div class="section clearfix">
                              <?php print $messages; ?>
                              </div></div> <!-- /.section, /#messages -->
                      <?php endif; ?>
                      <?php print render($page['content']); ?>
                       
                    </div>
                </div>
                <div class="col-lg-6 register-half-bg d-flex flex-row">
                    <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright © 2020  All rights reserved.</p>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- base:js -->
