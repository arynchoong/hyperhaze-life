<?php
/**
 * Hyper Haze Hackathon
 *
 * @link    http://www.hackathon.io/haze3 for Team Project
 * @link    http://www.hackathon.io/hyper-haze for Hackathon Site
 * @author  Zion Ng <zion@intzone.com>
 * @version 2015-10-13T12:00+08:00 zion.ng
 */

$threads = array(
    'Navigation best practices',
    'Petitions to NEA for 1hr PSI',
    'Healthy foods to combat the haze',
    'Best N95 masks?',
);
?>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Topic</th>
      <th>Voices</th>
      <th>Last Seen</th>
    </tr>
  </thead>

  <tbody>
    <?php
    $date = new DateTime();
    foreach ($threads as $thread) {
        printf(
            '<tr><td>%s</td><td>%d</td><td>%s</td></tr>',
            $thread,
            rand(10, 100),
            $date->format('D d M Y')
        );

        $date->modify('-3 days');
    }
    ?>
  </tbody>
</table>
