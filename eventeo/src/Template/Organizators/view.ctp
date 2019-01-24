<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organizator $organizator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
      <li class="heading"><?= __('Akcje') ?></li>
      <?= $this->element('side_menu'); ?>
      <li><?= $this->Html->link(__('Edytuj organizatora'), ['action' => 'edit', $organizator->id]) ?> </li>
      <li><?= $this->Form->postLink(__('Usuń organizatora'), ['action' => 'delete', $organizator->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $organizator->id)]) ?> </li>
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
        <h4><?= __('Wydarzenia') ?></h4>
        <?php if (!empty($organizator->events)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nazwa') ?></th>
                <th scope="col"><?= __('Miejsce') ?></th>
                <th scope="col"><?= __('Opis') ?></th>
                <th scope="col"><?= __('Data zakończenia') ?></th>
                <th scope="col"><?= __('Data rozpoczęcia') ?></th>
                <th scope="col"><?=__('Utworzono')  ?></th>
                <th scope="col"><?= __('Edytowano')  ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
            <?php foreach ($organizator->events as $events): ?>
            <tr>
                <td><?= h($events->id) ?></td>
                <td><?= h($events->nazwa) ?></td>
                <td><?= h($events->miejsce) ?></td>
                <td><?= h($events->opis) ?></td>
                <td><?= h($events->date_start) ?></td>
                <td><?= h($events->date_stop) ?></td>
                <td><?= h($events->created) ?></td>
                <td><?= h($events->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Widok'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $events->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
