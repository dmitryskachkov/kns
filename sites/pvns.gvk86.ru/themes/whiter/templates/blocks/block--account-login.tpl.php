<div class="row">

    <div class="col-lg-12" id="auth-block">
      <?php if (user_is_anonymous()): ?>
        <?php print $content ?>
      <?php else: ?>

      <?php endif; ?>

    </div>


</div>
