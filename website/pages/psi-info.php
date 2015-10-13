<?php
/**
 * Hyper Haze Hackathon
 *
 * @link    http://www.hackathon.io/haze3 for Team Project
 * @link    http://www.hackathon.io/hyper-haze for Hackathon Site
 * @author  Zion Ng <zion@intzone.com>
 * @version 2015-10-13T12:00+08:00 zion.ng
 */
?>

<div class="row">
  <div class="col-sm-12">
    <img id="map" src="images/map01.jpg" class="img-responsive" />
  </div>
</div>

<script>
  $(window).load(function () {
      $('#map').hover(
          function () { $(this).attr('src', 'images/map02.jpg'); },
          function () { $(this).attr('src', 'images/map01.jpg'); }
      );
  });
</script>