<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prize $prize
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Edytuj nagrodę'), ['action' => 'edit', $prize->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Usuń nagrodę'), ['action' => 'delete', $prize->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $prize->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Nagród'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Dodaj nagrodę'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Wydarzeń'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowe Wydarzenie'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="prizes view large-9 medium-8 columns content">
    <h3><?= h($prize->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nazwa') ?></th>
            <td><?= h($prize->nazwa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wartosc') ?></th>
            <td><?= h($prize->wartosc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $prize->has('event') ? $this->Html->link($prize->event->id, ['controller' => 'Events', 'action' => 'view', $prize->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($prize->id) ?></td>
        </tr>
    </table>
</div>
