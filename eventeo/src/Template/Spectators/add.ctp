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
    </ul>
</nav>
<div class="spectators form large-9 medium-8 columns content">
    <?= $this->Form->create($spectator) ?>
    <fieldset>
        <legend><?= __('Dodaj Widza') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('nazwa');
            echo $this->Form->control('event_id', ['options' => $events]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
