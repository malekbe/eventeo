<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Spectator $spectator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
      <li class="heading"><?= __('Akcje') ?></li>
      <?= $this->element('side_menu'); ?>
      <li><?= $this->Html->link(__('Edytuj widza'), ['action' => 'edit', $spectator->id]) ?> </li>
      <li><?= $this->Form->postLink(__('Usuń widza'), ['action' => 'delete', $spectator->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $spectator->id)]) ?> </li>
      <li><?= $this->Html->link(__('Lista widzów'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="spectators view large-9 medium-8 columns content">
    <h3>Widz nr <?= h($spectator->id) ?></h3>
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
            <th scope="row"><?= __('Wydarzenie') ?></th>
            <td><?= $spectator->has('event') ? $this->Html->link($spectator->event->nazwa, ['controller' => 'Events', 'action' => 'view', $spectator->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($spectator->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Bilety') ?></h4>
        <?php if (!empty($spectator->tickets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cena') ?></th>
                <th scope="col"><?= __('Koszt') ?></th>
                <th scope="col"><?= __('Ilosc') ?></th>
                <th scope="col"><?= __('Typ') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($spectator->tickets as $tickets): ?>
            <tr>
                <td><?= h($tickets->id) ?></td>
                <td><?= h($tickets->cena) ?></td>
                <td><?= h($tickets->koszt) ?></td>
                <td><?= h($tickets->ilosc) ?></td>
                <td><?= h($tickets->typ) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Widok'), ['controller' => 'Tickets', 'action' => 'view', $tickets->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['controller' => 'Tickets', 'action' => 'edit', $tickets->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['controller' => 'Tickets', 'action' => 'delete', $tickets->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $tickets->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
