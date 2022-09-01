<?php
use Phpfastcache\Helper\Psr16Adapter;
require __DIR__ . '/../vendor/autoload.php';

// getPaginateMedias() works with and without authentication
$instagram = \InstagramCrawler\Instagram::withCredentials(new \GuzzleHttp\Client(), 'username', 'password', new Psr16Adapter('Files'));
$instagram->login();

$result = $instagram->getPaginateMedias('kevin');
$medias = $result['medias'];
if ($result['hasNextPage'] === true) {
    $result = $instagram->getPaginateMedias('kevin', $result['maxId']);
    $medias = array_merge($medias, $result['medias']);
}

echo json_encode($medias);
