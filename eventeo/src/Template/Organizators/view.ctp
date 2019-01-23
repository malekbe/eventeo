<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organizator $organizator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Html->link(__('Edit Organizator'), ['action' => 'edit', $organizator->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Organizator'), ['action' => 'delete', $organizator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $organizator->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Organizatorów'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowy Organizator'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nowe Wydarzenie'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="organizators view large-9 medium-8 columns content">
    <h3><?= h($organizator->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($organizator->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefon') ?></th>
            <td><?= h($organizator->telefon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($organizator->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Adres') ?></h4>
        <?= $this->Text->autoParagraph(h($organizator->adres)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Events') ?></h4>
        <?php if (!empty($organizator->events)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nazwa') ?></th>
                <th scope="col"><?= __('Miejsce') ?></th>
                <th scope="col"><?= __('Opis') ?></th>
                <th scope="col"><?= __('Organizator Id') ?></th>
                <th scope="col"><?= __('Date Start') ?></th>
                <th scope="col"><?= __('Date Stop') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($organizator->events as $events): ?>
            <tr>
                <td><?= h($events->id) ?></td>
                <td><?= h($events->nazwa) ?></td>
                <td><?= h($events->miejsce) ?></td>
                <td><?= h($events->opis) ?></td>
                <td><?= h($events->organizator_id) ?></td>
                <td><?= h($events->date_start) ?></td>
                <td><?= h($events->date_stop) ?></td>
                <td><?= h($events->created) ?></td>
                <td><?= h($events->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Widok'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
