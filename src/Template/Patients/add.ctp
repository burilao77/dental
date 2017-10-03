<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Patients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Consultations'), ['controller' => 'Consultations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultation'), ['controller' => 'Consultations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="patients form large-9 medium-8 columns content">
    <?= $this->Form->create($patient) ?>
    <fieldset>
        <legend><?= __('Add Patient') ?></legend>
        <?php
            echo $this->Form->control('full_name');
            echo $this->Form->control('ci');
            echo $this->Form->control('email');
            echo $this->Form->control('gender');
            echo $this->Form->control('age');
            echo $this->Form->control('address');
            echo $this->Form->control('phone');
            echo $this->Form->control('heart_problems');
            echo $this->Form->control('high_blood_pressure');
            echo $this->Form->control('circulatory_problems');
            echo $this->Form->control('nervous_problems');
            echo $this->Form->control('radiotherapy');
            echo $this->Form->control('artificial_heart_valves');
            echo $this->Form->control('weightloss');
            echo $this->Form->control('back_problems');
            echo $this->Form->control('respiratory_diseases');
            echo $this->Form->control('diabetes');
            echo $this->Form->control('low_blood_pressure');
            echo $this->Form->control('epilepsy');
            echo $this->Form->control('hepatitis');
            echo $this->Form->control('cancer');
            echo $this->Form->control('psychiatric_treatment');
            echo $this->Form->control('special_diet');
            echo $this->Form->control('diseases_of_the_blood');
            echo $this->Form->control('arthritis');
            echo $this->Form->control('swollen_neck_glands');
            echo $this->Form->control('rheumatic_fever');
            echo $this->Form->control('vih');
            echo $this->Form->control('cerebral_embolism');
            echo $this->Form->control('ulcers');
            echo $this->Form->control('venereal_diseases');
            echo $this->Form->control('hemophilia');
            echo $this->Form->control('osteoporosis');
            echo $this->Form->control('liver_diseases');
            echo $this->Form->control('chronic_diarrhea');
            echo $this->Form->control('drug_addiction');
            echo $this->Form->control('allergies_to_anesthetics');
            echo $this->Form->control('allergies_to_medicines');
            echo $this->Form->control('allergies_to_general');
            echo $this->Form->control('others');
            echo $this->Form->control('active');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
