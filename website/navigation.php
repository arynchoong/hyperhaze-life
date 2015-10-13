<?php
/**
 * Navigation
 *
 * @link    http://www.hackathon.io/haze3 for Team Project
 * @link    http://www.hackathon.io/hyper-haze for Hackathon Site
 * @author  Zion Ng <zion@intzone.com>
 * @version 2015-10-13T12:00+08:00 zion.ng
 */
?>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><span class="glyphicon glyphicon-home"></span></a>
    </div>

    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav nav-pills">
        <?php $i = 0; ?>
        <?php foreach ($pages as $page => $subpages): ?>
          <li class="phone-center<?php echo (0 == $i++ ? ' active' : ''); ?>">
            <?php
            printf(
              '<a href="?page=%s"%s>%s%s</a>',
              titleToSlug($page),
              ($subpages ? ' class="dropdown-toggle" data-toggle="dropdown"' : ''),
              $page,
              ($subpages ? ' <span class="caret"></span>' : '')
            );
            ?>
            <?php if ($subpages): ?>
              <ul class="dropdown-menu" role="menu">
                <?php foreach ($subpages as $subpage): ?>
                  <li class="phone-center">
                    <?php
                    printf(
                        '<a href="?page=%s">%s</a>',
                        titleToSlug($subpage),
                        $subpage
                    );
                    ?>
                  </li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>
