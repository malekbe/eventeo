<?php if ($role == ORGANIZATOR || $role == UCZESTNIK): ?>
    <li><?= $this->Html->link(__('Nowy Uczestnik'), ['controller' => 'Participants', 'action' => 'add']) ?></li>
    <li><?= $this->Html->link(__('Lista Uczestników'), ['controller' => 'Participants', 'action' => 'index']) ?></li>
<?php endif; ?>
    <li><?= $this->Html->link(__('Lista Wydarzeń'), ['controller' => 'Events','action' => 'index']) ?></li>
<?php if ($role == ORGANIZATOR): ?>
    <li><?= $this->Html->link(__('Nowe Wydarzenie'), ['controller' => 'Events','action' => 'add']) ?></li>
    <li><?= $this->Html->link(__('Lista Organizatorów'), ['controller' => 'Organizators', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Nowy Organizator'), ['controller' => 'Organizators', 'action' => 'add']) ?></li>
    <li><?= $this->Html->link(__('Lista Nagród'), ['controller' => 'Prizes', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('Dodaj nagrodę'), ['controller' => 'Prizes', 'action' => 'add']) ?></li>
    <li><?= $this->Html->link(__('Lista widzów'), ['controller' => 'Spectators', 'action' => 'index']) ?></li>
<?php endif; ?>
<li><?= $this->Html->link(__('Nowy Widz'), ['controller' => 'Spectators', 'action' => 'add']) ?></li>
<li><?= $this->Html->link(__('Dodaj bilet'), ['controller' => 'Tickets', 'action' => 'add']) ?></li>
