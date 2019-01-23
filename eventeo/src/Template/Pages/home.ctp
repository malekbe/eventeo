<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      Eventeo
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Lista wydarzeń'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Organizatorów'), ['controller' => 'Organizators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Dodaj Organizatora'), ['controller' => 'Organizators', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Uczestników'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Dodaj Uczestnika'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Nagród'), ['controller' => 'Prizes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Dodaj nagrodę'), ['controller' => 'Prizes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Widzowie'), ['controller' => 'Spectators', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Dodaj Widza'), ['controller' => 'Spectators', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="events form large-9 medium-8 columns content">
  <h3>Eventeo - projekt systemu ułatwiającego organizacją imprez sportowych.</h3>
  <h4>Projekt zrealizowany podczas zajęć Inżynierii Oprogramowania</h4>
  <ul>
    Autorzy projektu:
    <li>Łukasz Małek</li>
    <li>Daria Jakubowska</li>
    <li>Łukasz Rychta</li>
    <li>Sylwester Giers</li>
    <li>Marek Żuchyński</li>
  </ul>
</div>
</body>
</html>
