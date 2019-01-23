<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Prize $prize
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $prize->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $prize->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Nagród'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowe Wydarzenie'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prizes form large-9 medium-8 columns content">
    <?= $this->Form->create($prize) ?>
    <fieldset>
        <legend><?= __('Edit Prize') ?></legend>
        <?php
            echo $this->Form->control('nazwa');
            echo $this->Form->control('wartosc');
            echo $this->Form->control('event_id', ['label' => 'Wydarzenie', 'options' => $events]);
            echo $this->Form->control('participant_id', ['label' => 'Zwyciezca', 'options' => $participants]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
