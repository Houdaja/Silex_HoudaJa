<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

require __DIR__ . '/../app/config/dev.php';
require __DIR__ . '/../app/app.php';
require __DIR__ . '/../app/routes.php';
require __DIR__ . '/../src/DAO/ArticleDAO.php';
require __DIR__ . '/../src/DAO/CommentDAO.php';
require __DIR__ . '/../src/Domain/Article.php';
require __DIR__ . '/../src/Domain/Comment.php';

$app->run();
