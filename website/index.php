<?php
/**
 * Hyper Haze Hackathon
 *
 * @link    http://www.hackathon.io/haze3 for Team Project
 * @link    http://www.hackathon.io/hyper-haze for Hackathon Site
 * @author  Zion Ng <zion@intzone.com>
 * @version 2015-10-13T12:00+08:00 zion.ng
 */

include 'inc.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Title -->
    <title>Hyper Haze Hackathon</title>

    <!-- Stylesheets -->
    <link href="/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <link href="/library/bootstrap/3.2.0/css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/library/bootstrap/3.2.0/css/bootstrap-theme.min.css" media="screen" rel="stylesheet" type="text/css">
    <link href="/style.css" media="screen" rel="stylesheet" type="text/css">

    <!-- Head Scripts -->
    <script type="text/javascript" src="/library/jquery/1.11.1/jquery-1.11.1.min.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="text-center">
        <b>Hyper Haze Hackathon</b><br />
        <a href="http://www.hackathon.io/hyper-haze" target="_blank">Hackathon Site</a> &bullet;
        <a href="http://www.hackathon.io/haze3" target="_blank">Team Project</a><br /><br />
      </div>


      <!-- Navigation -->
      <?php include 'navigation.php'; ?>

      <!-- Content -->
      <div class="text-center">
        <h2><?php echo ('home' == $slug) ? 'Life: Safe Sea Lanes' : slugToTitle($slug); ?></h2>
      </div>

      <?php
      include "{$folder}/{$slug}.php";
      ?>
      <br /><br />
    </div>
  </body>
</html>
