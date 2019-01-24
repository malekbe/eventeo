<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
      <li class="heading"><?= __('Akcje') ?></li>
      <?= $this->element('side_menu'); ?>
      <li><?= $this->Html->link(__('Edytuj Wydarzenie'), ['action' => 'edit', $event->id]) ?> </li>
      <li><?= $this->Form->postLink(__('Usuń Wydarzenie'), ['action' => 'delete', $event->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $event->id)]) ?> </li>
    </ul>
</nav>
<div class="events view large-9 medium-8 columns content">
    <h3>Wydarzenie nr <?= h($event->id) ?></h3>
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
            <td><?= $event->has('organizator') ? $this->Html->link($event->organizator->email, ['controller' => 'Organizators', 'action' => 'view', $event->organizator->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($event->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data zakończenia') ?></th>
            <td><?= h($event->date_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data rozpoczęcia') ?></th>
            <td><?= h($event->date_stop) ?></td>
        </tr>
        <tr>
            <th scope="row"><?=__('Utworzono')  ?></th>
            <td><?= h($event->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edytowano')  ?></th>
            <td><?= h($event->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Opis') ?></h4>
        <?= $this->Text->autoParagraph(h($event->opis)); ?>
    </div>
    <div class="related">
        <h4><?= __('Uczestnicy') ?></h4>
        <?php if (!empty($event->participants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Telefon') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($event->participants as $participants): ?>
            <tr>
                <td><?= h($participants->id) ?></td>
                <td><?= h($participants->email) ?></td>
                <td><?= h($participants->telefon) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Widok'), ['controller' => 'Participants', 'action' => 'view', $participants->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['controller' => 'Participants', 'action' => 'edit', $participants->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['controller' => 'Participants', 'action' => 'delete', $participants->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $participants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Nagrody') ?></h4>
        <?php if (!empty($event->prizes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nazwa') ?></th>
                <th scope="col"><?= __('Wartosc') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($event->prizes as $prizes): ?>
            <tr>
                <td><?= h($prizes->id) ?></td>
                <td><?= h($prizes->nazwa) ?></td>
                <td><?= h($prizes->wartosc) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Widok'), ['controller' => 'Prizes', 'action' => 'view', $prizes->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['controller' => 'Prizes', 'action' => 'edit', $prizes->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['controller' => 'Prizes', 'action' => 'delete', $prizes->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $prizes->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Widzowie') ?></h4>
        <?php if (!empty($event->spectators)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Nazwa') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($event->spectators as $spectators): ?>
            <tr>
                <td><?= h($spectators->id) ?></td>
                <td><?= h($spectators->email) ?></td>
                <td><?= h($spectators->nazwa) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Widok'), ['controller' => 'Spectators', 'action' => 'view', $spectators->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['controller' => 'Spectators', 'action' => 'edit', $spectators->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['controller' => 'Spectators', 'action' => 'delete', $spectators->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $spectators->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
