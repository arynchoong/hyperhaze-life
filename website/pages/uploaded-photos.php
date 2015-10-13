<?php
/**
 * Hyper Haze Hackathon
 *
 * @link    http://www.hackathon.io/haze3 for Team Project
 * @link    http://www.hackathon.io/hyper-haze for Hackathon Site
 * @author  Zion Ng <zion@intzone.com>
 * @version 2015-10-13T12:00+08:00 zion.ng
 */

$cols = 3;
$colClass = 12 / $cols;

$photos = array(
    // 'photo01.jpg' => 'Wheel of Fortune at 9am',
    'photo02.jpg' => 'Titanic approaching at 4pm',
    // 'photo03.jpg' => 'Singapore Zoo at 10pm',
    'photo04.png' => '',
    'photo05.png' => '',
);

$i = 0;
$date = new DateTime();
foreach ($photos as $photo => $caption) {
    if (0 == $i % $cols) {
        echo '<div class="row">';
    }

    printf(
        '<div class="col-sm-%d text-center"><img src="images/%s" class="img-responsive" />%s%s</div>',
        $colClass,
        $photo,
        '', // $caption,
        $date->format('D d M Y')
    );
    $date->modify('+1 day');

    if (($cols - 1) == $i % $cols) {
        echo '</div>';
    }

    $i++;
}
if (($cols - 1) == $i % $cols) {
    echo '</div>';
}
?>
