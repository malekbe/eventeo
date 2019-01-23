<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowe Wydarzenie'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Organizatorów'), ['controller' => 'Organizators', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy Organizator'), ['controller' => 'Organizators', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Uczestników'), ['controller' => 'Participants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy Uczestnik'), ['controller' => 'Participants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Nagród'), ['controller' => 'Prizes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Dodaj nagrodę'), ['controller' => 'Prizes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista widzów'), ['controller' => 'Spectators', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy Widzz'), ['controller' => 'Spectators', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="events view large-9 medium-8 columns content">
    <h3><?= h($event->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nazwa') ?></th>
            <td><?= h($event->nazwa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Miejsce') ?></th>
            <td><?= h($event->miejsce) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Organizator') ?></th>
            <td><?= $event->has('organizator') ? $this->Html->link($event->organizator->id, ['controller' => 'Organizators', 'action' => 'view', $event->organizator->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($event->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Start') ?></th>
            <td><?= h($event->date_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Stop') ?></th>
            <td><?= h($event->date_stop) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($event->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($event->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Opis') ?></h4>
        <?= $this->Text->autoParagraph(h($event->opis)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Participants') ?></h4>
        <?php if (!empty($event->participants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Telefon') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($event->participants as $participants): ?>
            <tr>
                <td><?= h($participants->id) ?></td>
                <td><?= h($participants->email) ?></td>
                <td><?= h($participants->telefon) ?></td>
                <td><?= h($participants->event_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Widok'), ['controller' => 'Participants', 'action' => 'view', $participants->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['controller' => 'Participants', 'action' => 'edit', $participants->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['controller' => 'Participants', 'action' => 'delete', $participants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $participants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Prizes') ?></h4>
        <?php if (!empty($event->prizes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nazwa') ?></th>
                <th scope="col"><?= __('Wartosc') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($event->prizes as $prizes): ?>
            <tr>
                <td><?= h($prizes->id) ?></td>
                <td><?= h($prizes->nazwa) ?></td>
                <td><?= h($prizes->wartosc) ?></td>
                <td><?= h($prizes->event_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Widok'), ['controller' => 'Prizes', 'action' => 'view', $prizes->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['controller' => 'Prizes', 'action' => 'edit', $prizes->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['controller' => 'Prizes', 'action' => 'delete', $prizes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prizes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Spectators') ?></h4>
        <?php if (!empty($event->spectators)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Nazwa') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($event->spectators as $spectators): ?>
            <tr>
                <td><?= h($spectators->id) ?></td>
                <td><?= h($spectators->email) ?></td>
                <td><?= h($spectators->nazwa) ?></td>
                <td><?= h($spectators->event_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Widok'), ['controller' => 'Spectators', 'action' => 'view', $spectators->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['controller' => 'Spectators', 'action' => 'edit', $spectators->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['controller' => 'Spectators', 'action' => 'delete', $spectators->id], ['confirm' => __('Are you sure you want to delete # {0}?', $spectators->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
