<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Patient Entity
 *
 * @property int $id
 * @property string $full_name
 * @property string $ci
 * @property string $email
 * @property string $gender
 * @property int $age
 * @property string $address
 * @property string $phone
 * @property bool $heart_problems
 * @property bool $high_blood_pressure
 * @property bool $circulatory_problems
 * @property bool $nervous_problems
 * @property bool $radiotherapy
 * @property bool $artificial_heart_valves
 * @property bool $weightloss
 * @property bool $back_problems
 * @property bool $respiratory_diseases
 * @property bool $diabetes
 * @property bool $low_blood_pressure
 * @property bool $epilepsy
 * @property bool $hepatitis
 * @property bool $cancer
 * @property bool $psychiatric_treatment
 * @property bool $special_diet
 * @property bool $diseases_of_the_blood
 * @property bool $arthritis
 * @property bool $swollen_neck_glands
 * @property bool $rheumatic_fever
 * @property bool $vih
 * @property bool $cerebral_embolism
 * @property bool $ulcers
 * @property bool $venereal_diseases
 * @property bool $hemophilia
 * @property bool $osteoporosis
 * @property bool $liver_diseases
 * @property bool $chronic_diarrhea
 * @property bool $drug_addiction
 * @property bool $allergies_to_anesthetics
 * @property bool $allergies_to_medicines
 * @property bool $allergies_to_general
 * @property bool $others
 * @property bool $active
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Consultation[] $consultations
 */
class Patient extends Entity
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
        'gender' => true,
        'age' => true,
        'address' => true,
        'phone' => true,
        'heart_problems' => true,
        'high_blood_pressure' => true,
        'circulatory_problems' => true,
        'nervous_problems' => true,
        'radiotherapy' => true,
        'artificial_heart_valves' => true,
        'weightloss' => true,
        'back_problems' => true,
        'respiratory_diseases' => true,
        'diabetes' => true,
        'low_blood_pressure' => true,
        'epilepsy' => true,
        'hepatitis' => true,
        'cancer' => true,
        'psychiatric_treatment' => true,
        'special_diet' => true,
        'diseases_of_the_blood' => true,
        'arthritis' => true,
        'swollen_neck_glands' => true,
        'rheumatic_fever' => true,
        'vih' => true,
        'cerebral_embolism' => true,
        'ulcers' => true,
        'venereal_diseases' => true,
        'hemophilia' => true,
        'osteoporosis' => true,
        'liver_diseases' => true,
        'chronic_diarrhea' => true,
        'drug_addiction' => true,
        'allergies_to_anesthetics' => true,
        'allergies_to_medicines' => true,
        'allergies_to_general' => true,
        'others' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'consultations' => true
    ];
}
