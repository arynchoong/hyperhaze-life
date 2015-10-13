<?php
/**
 * Hyper Haze Hackathon
 *
 * @link    http://www.hackathon.io/haze3 for Team Project
 * @link    http://www.hackathon.io/hyper-haze for Hackathon Site
 * @author  Zion Ng <zion@intzone.com>
 * @version 2015-10-13T12:00+08:00 zion.ng
 */

$posts = array(
    'Task force needs about 10 days to douse Sumatra fires',
    'Indonesia widens haze probe to 3 more firms',
    'Another 20 firms sign "haze-free" declaration',
);
$text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vulputate euismod mauris a lobortis. Nulla sed ex ex. Sed rhoncus lacus urna, id aliquam lorem lacinia at. Aenean vehicula metus eget est tristique congue. Fusce ac viverra nulla. Aliquam a finibus massa. Donec eget lectus nisi.';

$date = new DateTime();
foreach ($posts as $post) {
    printf(
        '<big><b>%s</b></big><br />
         <span class="glyphicon glyphicon-time"></span> %s<br />
         %s<hr />',
        $post,
        $date->format('D d M Y'),
        $text
    );

    $date->modify('+7 days');
}
