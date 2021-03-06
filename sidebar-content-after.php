<?php if ( is_dynamic_sidebar( 'content-after' ) ) : ?>
<aside id="contenAfter" class="sidebar region content-after wrapper container">
  <div class="inner">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('content-after') ) : // begin secondary sidebar widgets ?>
  <form id="searchform" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
    <input id="s" name="s" type="text" class="text" title="Suchen..." placeholder="Suchen..." size="10" />
    <input class="button" type="submit" class="button" value="Finden" title="Finden" />
  </form>
  <?php endif; // end primary sidebar widgets  ?>
  <?php if ( is_single() && function_exists('related_entries') ) : ?>
  <div class="widget"><?php related_entries(); ?></div>
  <?php endif; ?>
  </div>
</aside>
<?php endif; ?>
