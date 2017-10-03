<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Patient[]|\Cake\Collection\CollectionInterface $patients
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Patient'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Consultations'), ['controller' => 'Consultations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Consultation'), ['controller' => 'Consultations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="patients index large-9 medium-8 columns content">
    <h3><?= __('Patients') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('full_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ci') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('heart_problems') ?></th>
                <th scope="col"><?= $this->Paginator->sort('high_blood_pressure') ?></th>
                <th scope="col"><?= $this->Paginator->sort('circulatory_problems') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nervous_problems') ?></th>
                <th scope="col"><?= $this->Paginator->sort('radiotherapy') ?></th>
                <th scope="col"><?= $this->Paginator->sort('artificial_heart_valves') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weightloss') ?></th>
                <th scope="col"><?= $this->Paginator->sort('back_problems') ?></th>
                <th scope="col"><?= $this->Paginator->sort('respiratory_diseases') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diabetes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('low_blood_pressure') ?></th>
                <th scope="col"><?= $this->Paginator->sort('epilepsy') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hepatitis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cancer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('psychiatric_treatment') ?></th>
                <th scope="col"><?= $this->Paginator->sort('special_diet') ?></th>
                <th scope="col"><?= $this->Paginator->sort('diseases_of_the_blood') ?></th>
                <th scope="col"><?= $this->Paginator->sort('arthritis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('swollen_neck_glands') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rheumatic_fever') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vih') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cerebral_embolism') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ulcers') ?></th>
                <th scope="col"><?= $this->Paginator->sort('venereal_diseases') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hemophilia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('osteoporosis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('liver_diseases') ?></th>
                <th scope="col"><?= $this->Paginator->sort('chronic_diarrhea') ?></th>
                <th scope="col"><?= $this->Paginator->sort('drug_addiction') ?></th>
                <th scope="col"><?= $this->Paginator->sort('allergies_to_anesthetics') ?></th>
                <th scope="col"><?= $this->Paginator->sort('allergies_to_medicines') ?></th>
                <th scope="col"><?= $this->Paginator->sort('allergies_to_general') ?></th>
                <th scope="col"><?= $this->Paginator->sort('others') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($patients as $patient): ?>
            <tr>
                <td><?= $this->Number->format($patient->id) ?></td>
                <td><?= h($patient->full_name) ?></td>
                <td><?= h($patient->ci) ?></td>
                <td><?= h($patient->email) ?></td>
                <td><?= h($patient->gender) ?></td>
                <td><?= $this->Number->format($patient->age) ?></td>
                <td><?= h($patient->address) ?></td>
                <td><?= h($patient->phone) ?></td>
                <td><?= h($patient->heart_problems) ?></td>
                <td><?= h($patient->high_blood_pressure) ?></td>
                <td><?= h($patient->circulatory_problems) ?></td>
                <td><?= h($patient->nervous_problems) ?></td>
                <td><?= h($patient->radiotherapy) ?></td>
                <td><?= h($patient->artificial_heart_valves) ?></td>
                <td><?= h($patient->weightloss) ?></td>
                <td><?= h($patient->back_problems) ?></td>
                <td><?= h($patient->respiratory_diseases) ?></td>
                <td><?= h($patient->diabetes) ?></td>
                <td><?= h($patient->low_blood_pressure) ?></td>
                <td><?= h($patient->epilepsy) ?></td>
                <td><?= h($patient->hepatitis) ?></td>
                <td><?= h($patient->cancer) ?></td>
                <td><?= h($patient->psychiatric_treatment) ?></td>
                <td><?= h($patient->special_diet) ?></td>
                <td><?= h($patient->diseases_of_the_blood) ?></td>
                <td><?= h($patient->arthritis) ?></td>
                <td><?= h($patient->swollen_neck_glands) ?></td>
                <td><?= h($patient->rheumatic_fever) ?></td>
                <td><?= h($patient->vih) ?></td>
                <td><?= h($patient->cerebral_embolism) ?></td>
                <td><?= h($patient->ulcers) ?></td>
                <td><?= h($patient->venereal_diseases) ?></td>
                <td><?= h($patient->hemophilia) ?></td>
                <td><?= h($patient->osteoporosis) ?></td>
                <td><?= h($patient->liver_diseases) ?></td>
                <td><?= h($patient->chronic_diarrhea) ?></td>
                <td><?= h($patient->drug_addiction) ?></td>
                <td><?= h($patient->allergies_to_anesthetics) ?></td>
                <td><?= h($patient->allergies_to_medicines) ?></td>
                <td><?= h($patient->allergies_to_general) ?></td>
                <td><?= h($patient->others) ?></td>
                <td><?= h($patient->active) ?></td>
                <td><?= h($patient->created) ?></td>
                <td><?= h($patient->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $patient->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $patient->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $patient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $patient->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
