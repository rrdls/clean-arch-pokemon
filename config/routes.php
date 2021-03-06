<?php

/** @var \Slim\App $app */

use App\Battle\Adapters\Http\StartAction;
use App\Market\Adapters\Http\ItemsListAction;
use App\Market\Adapters\Http\PurchaseAction;
use App\Player\Adapters\Http\ProfileAction;
use App\Player\Adapters\Http\ProfilePageAction;
use App\Pokedex\Adapters\Http\SearchAction;
use Slim\Interfaces\RouteCollectorProxyInterface;

$app->group('/player', function (RouteCollectorProxyInterface $group) {
    $group->get('/{id}/profile', ProfileAction::class);
    $group->get('/profile/page', ProfilePageAction::class);
});

$app->group('/pokedex', function (RouteCollectorProxyInterface $group) {
    $group->get('/search', SearchAction::class);
});

$app->group('/market', function (RouteCollectorProxyInterface $group) {
    $group->post('/purchase', PurchaseAction::class);
    $group->get('/items', ItemsListAction::class);
});

$app->group('/battle', function (RouteCollectorProxyInterface $group) {
    $group->post('/start', StartAction::class);
});
