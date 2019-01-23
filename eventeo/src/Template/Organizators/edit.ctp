<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Organizator $organizator
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Akcje') ?></li>
        <li><?= $this->Form->postLink(
                __('Usuń'),
                ['action' => 'delete', $organizator->id],
                ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $organizator->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Organizatorów'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Wydarzeń'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nowe Wydarzenie'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="organizators form large-9 medium-8 columns content">
    <?= $this->Form->create($organizator) ?>
    <fieldset>
        <legend><?= __('Edytuj organizatora') ?></legend>
        <?php
            echo $this->Form->control('adres');
            echo $this->Form->control('email');
            echo $this->Form->control('telefon');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
