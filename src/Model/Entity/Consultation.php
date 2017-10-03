<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Consultation Entity
 *
 * @property int $id
 * @property string $diagnosis
 * @property string $detail
 * @property bool $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $user_id
 * @property int $patient_id
 * @property int $treatment_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Patient $patient
 * @property \App\Model\Entity\Treatment $treatment
 */
class Consultation extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'diagnosis' => true,
        'detail' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'user_id' => true,
        'patient_id' => true,
        'treatment_id' => true,
        'user' => true,
        'patient' => true,
        'treatment' => true
    ];
}
