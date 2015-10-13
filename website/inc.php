<?php
/**
 * Hyper Haze Hackathon
 *
 * @link    http://www.hackathon.io/haze3 for Team Project
 * @link    http://www.hackathon.io/hyper-haze for Hackathon Site
 * @author  Zion Ng <zion@intzone.com>
 * @version 2015-10-13T12:00+08:00 zion.ng
 */

$folder = 'pages';
$slug = isset($_GET['page']) ? $_GET['page'] : 'home';
$slug = file_exists("{$folder}/{$slug}.php") ? $slug : 'home';

$pages = array(
    'Plan' => array('PSI Info', 'Uploaded Photos'),
    'Better' => array('Blog', 'Forum'),
    'Change' => array('Petition', 'Responsible Companies'),
    'Learn' => array(),
);

function slugToTitle($slug) {
    return ('psi-info' == $slug) ? 'PSI Info' : ucwords(str_replace('-', ' ', $slug));
}

function titleToSlug($title) { return strtolower(str_replace(' ', '-', $title)); }
