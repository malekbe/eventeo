<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prize $prize
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Prize'), ['action' => 'edit', $prize->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Prize'), ['action' => 'delete', $prize->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prize->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Prizes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prize'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
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
