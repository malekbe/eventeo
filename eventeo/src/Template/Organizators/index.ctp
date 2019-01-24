<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organizator[]|\Cake\Collection\CollectionInterface $organizators
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
      <li class="heading"><?= __('Akcje') ?></li>
      <?= $this->element('side_menu'); ?>
    </ul>
</nav>
<div class="organizators index large-9 medium-8 columns content">
    <h3><?= __('Organizatorzy') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefon') ?></th>
                <th scope="col" class="actions"><?= __('Akcje') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($organizators as $organizator): ?>
            <tr>
                <td><?= $this->Number->format($organizator->id) ?></td>
                <td><?= h($organizator->email) ?></td>
                <td><?= h($organizator->telefon) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Widok'), ['action' => 'view', $organizator->id]) ?>
                    <?= $this->Html->link(__('Edytuj'), ['action' => 'edit', $organizator->id]) ?>
                    <?= $this->Form->postLink(__('Usuń'), ['action' => 'delete', $organizator->id], ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $organizator->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('pierwsza')) ?>
            <?= $this->Paginator->prev('< ' . __('poprzednia')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('następna') . ' >') ?>
            <?= $this->Paginator->last(__('ostatnia') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Strona {{page}} z {{pages}}, pokazuje {{current}} wpisów ze wszystkich {{count}}')]) ?></p>
    </div>
</div>
