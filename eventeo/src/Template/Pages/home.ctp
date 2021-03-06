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
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      EWYDARZENIE
    </title>

    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('home.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="<?= $this->Url->build('/') ?>">EWYDARZENIE</a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <!--<li><a target="_blank" href="https://github.com/malekbe/eventeo">GitHub</a></li>-->
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <nav class="large-3 medium-4 columns" id="actions-sidebar">
            <ul class="side-nav">
                <li class="heading"><?= __('Akcje') ?></li>
                <li><?= $this->Html->link(__('Zaloguj jako widz'), ['controller' => 'events', 'action' => 'login', 3]) ?></li>
                <li><?= $this->Html->link(__('Zaloguj jako uczestnik'), ['controller' => 'events', 'action' => 'login', 2]) ?></li>
                <li><?= $this->Html->link(__('Zaloguj jako organizator'), ['controller' => 'events', 'action' => 'login', 1]) ?></li>
            </ul>
        </nav>
        <div class="events form large-9 medium-8 columns content">
        <h3>EWYDARZENIE - projekt systemu ułatwiającego organizację imprez sportowych.</h3>
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
</div>
</body>
</html>
