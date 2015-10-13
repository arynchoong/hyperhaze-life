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

Support these responsible companies!<br /><br />

<ul>
  <?php
  for ($i = 65; $i <= 90; $i++) {
      $name = str_repeat(chr($i), 3);
      echo "<li>{$name}</li>";
  }
  ?>
</ul>
