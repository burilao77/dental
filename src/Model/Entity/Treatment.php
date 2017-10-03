<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Treatment Entity
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property float $total_cost
 * @property string $payment_type
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Consultation[] $consultations
 * @property \App\Model\Entity\Recipe[] $recipes
 */
class Treatment extends Entity
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
        'name' => true,
        'description' => true,
        'total_cost' => true,
        'payment_type' => true,
        'created' => true,
        'modified' => true,
        'consultations' => true,
        'recipes' => true
    ];
}
