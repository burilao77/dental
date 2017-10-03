<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $full_name
 * @property string $ci
 * @property string $email
 * @property string $password
 * @property string $phone
 * @property string $photo
 * @property string $photo_dir
 * @property string $role
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Consultation[] $consultations
 */
class User extends Entity
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
        'full_name' => true,
        'ci' => true,
        'email' => true,
        'password' => true,
        'phone' => true,
        'photo' => true,
        'photo_dir' => false,
        'role' => true,
        'created' => true,
        'modified' => true,
        'consultations' => true,
        
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
