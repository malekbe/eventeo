<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        EWYDARZENIA
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
            <h1><a href="<?= $this->Url->build('/') ?>">EWYDARZENIA</a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <?php if ($role != NIEZALOGOWANY): ?>
                    <li><a href="javascript:void(0)">Zalogowany jako <?= $roles[$role] ?></a></li>
                <?php endif; ?>
                <!--<li><a target="_blank" href="https://github.com/malekbe/eventeo">GitHub</a></li>-->
                <?php if ($role != NIEZALOGOWANY): ?>
                    <li><a href="<?= $this->Url->build(['controller' => 'events', 'action' => 'logout']) ?>">Wyloguj</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
