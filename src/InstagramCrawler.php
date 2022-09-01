<?php
require_once __DIR__ . '/InstagramCrawler/Instagram.php';
require_once __DIR__ . '/InstagramCrawler/Endpoints.php';
require_once __DIR__ . '/InstagramCrawler/InstagramQueryId.php';
require_once __DIR__ . '/InstagramCrawler/Traits/ArrayLikeTrait.php';
require_once __DIR__ . '/InstagramCrawler/Traits/InitializerTrait.php';
require_once __DIR__ . '/InstagramCrawler/Model/AbstractModel.php';
require_once __DIR__ . '/InstagramCrawler/Model/Account.php';
require_once __DIR__ . '/InstagramCrawler/Model/CarouselMedia.php';
require_once __DIR__ . '/InstagramCrawler/Model/Comment.php';
require_once __DIR__ . '/InstagramCrawler/Model/Location.php';
require_once __DIR__ . '/InstagramCrawler/Model/Media.php';
require_once __DIR__ . '/InstagramCrawler/Model/Tag.php';
require_once __DIR__ . '/InstagramCrawler/Model/Highlight.php';
require_once __DIR__ . '/InstagramCrawler/Exception/InstagramException.php';
require_once __DIR__ . '/InstagramCrawler/Exception/InstagramAuthException.php';
require_once __DIR__ . '/InstagramCrawler/Exception/InstagramNotFoundException.php';
require_once __DIR__ . '/InstagramCrawler/Exception/InstagramAgeRestrictedException.php';
