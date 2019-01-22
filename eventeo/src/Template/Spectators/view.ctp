<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Spectator $spectator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Spectator'), ['action' => 'edit', $spectator->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Spectator'), ['action' => 'delete', $spectator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $spectator->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Spectators'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Spectator'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tickets'), ['controller' => 'Tickets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ticket'), ['controller' => 'Tickets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="spectators view large-9 medium-8 columns content">
    <h3><?= h($spectator->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($spectator->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nazwa') ?></th>
            <td><?= h($spectator->nazwa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $spectator->has('event') ? $this->Html->link($spectator->event->id, ['controller' => 'Events', 'action' => 'view', $spectator->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($spectator->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Tickets') ?></h4>
        <?php if (!empty($spectator->tickets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cena') ?></th>
                <th scope="col"><?= __('Koszt') ?></th>
                <th scope="col"><?= __('Ilosc') ?></th>
                <th scope="col"><?= __('Typ') ?></th>
                <th scope="col"><?= __('Spectator Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($spectator->tickets as $tickets): ?>
            <tr>
                <td><?= h($tickets->id) ?></td>
                <td><?= h($tickets->cena) ?></td>
                <td><?= h($tickets->koszt) ?></td>
                <td><?= h($tickets->ilosc) ?></td>
                <td><?= h($tickets->typ) ?></td>
                <td><?= h($tickets->spectator_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tickets', 'action' => 'view', $tickets->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tickets', 'action' => 'edit', $tickets->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tickets', 'action' => 'delete', $tickets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tickets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
