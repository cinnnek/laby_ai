<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'autoload.php';

use App\Controller\PostController;
use App\Controller\NoteController;
use App\Service\Config;
use App\Service\Templating;
use App\Service\Router;

$config = new Config();
$templating = new Templating();
$router = new Router();

$action = $_REQUEST['action'] ?? null;
$controller = null;

switch ($action) {
    case 'post-index':
    case null:
        $controller = new PostController();
        $view = $controller->indexAction($templating, $router);
        break;
    case 'note-index':
        $controller = new NoteController();
        $view = $controller->indexAction($templating, $router);
        break;

    case 'post-create':
        $controller = new PostController();
        $view = $controller->createAction($_REQUEST['post'] ?? null, $templating, $router);
        break;
    case 'note-create':
        $controller = new NoteController();
        $view = $controller->createAction($_REQUEST['note'] ?? null, $templating, $router);
        break;

    case 'post-edit':
        if (!$_REQUEST['id']) {
            break;
        }
        $controller = new PostController();
        $view = $controller->editAction($_REQUEST['id'], $_REQUEST['post'] ?? null, $templating, $router);
        break;
    case 'note-edit':
        if (!$_REQUEST['id']) {
            break;
        }
        $controller = new NoteController();
        $view = $controller->editAction($_REQUEST['id'], $_REQUEST['note'] ?? null, $templating, $router);
        break;

    case 'post-show':
        if (!$_REQUEST['id']) {
            break;
        }
        $controller = new PostController();
        $view = $controller->showAction($_REQUEST['id'], $templating, $router);
        break;
    case 'note-show':
        if (!$_REQUEST['id']) {
            break;
        }
        $controller = new NoteController();
        $view = $controller->showAction($_REQUEST['id'], $templating, $router);
        break;

    case 'post-delete':
        if (!$_REQUEST['id']) {
            break;
        }
        $controller = new PostController();
        $view = $controller->deleteAction($_REQUEST['id'], $router);
        break;
    case 'note-delete':
        if (!$_REQUEST['id']) {
            break;
        }
        $controller = new NoteController();
        $view = $controller->deleteAction($_REQUEST['id'], $router);
        break;
    case 'info':
        $controller = new InfoController();
        $view = $controller->infoAction();
        break;
    default:
        $view = 'Not found';
        break;
}

if ($view) {
    echo $view;
}