<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Participant $participant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
      <li class="heading"><?= __('Akcje') ?></li>
      <?= $this->element('side_menu'); ?>
      <li><?= $this->Form->postLink(
                __('Usuń'),
                ['action' => 'delete', $participant->id],
                ['confirm' => __('Jesteś pewien ze chcesz usuąć # {0}?', $participant->id)]
            )
        ?></li>
    </ul>
</nav>
<div class="participants form large-9 medium-8 columns content">
    <?= $this->Form->create($participant) ?>
    <fieldset>
        <legend><?= __('Edytuj uczestnika') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('telefon');
            echo $this->Form->control('event_id', ['options' => $events]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Zapisz')) ?>
    <?= $this->Form->end() ?>
</div>
