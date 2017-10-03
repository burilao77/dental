<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Patients Model
 *
 * @property \App\Model\Table\ConsultationsTable|\Cake\ORM\Association\HasMany $Consultations
 *
 * @method \App\Model\Entity\Patient get($primaryKey, $options = [])
 * @method \App\Model\Entity\Patient newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Patient[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Patient|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Patient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Patient[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Patient findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PatientsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('patients');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Consultations', [
            'foreignKey' => 'patient_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('full_name')
            ->requirePresence('full_name', 'create')
            ->notEmpty('full_name');

        $validator
            ->scalar('ci')
            ->requirePresence('ci', 'create')
            ->notEmpty('ci');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('gender')
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->integer('age')
            ->requirePresence('age', 'create')
            ->notEmpty('age');

        $validator
            ->scalar('address')
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->scalar('phone')
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->boolean('heart_problems')
            ->requirePresence('heart_problems', 'create')
            ->notEmpty('heart_problems');

        $validator
            ->boolean('high_blood_pressure')
            ->requirePresence('high_blood_pressure', 'create')
            ->notEmpty('high_blood_pressure');

        $validator
            ->boolean('circulatory_problems')
            ->requirePresence('circulatory_problems', 'create')
            ->notEmpty('circulatory_problems');

        $validator
            ->boolean('nervous_problems')
            ->requirePresence('nervous_problems', 'create')
            ->notEmpty('nervous_problems');

        $validator
            ->boolean('radiotherapy')
            ->requirePresence('radiotherapy', 'create')
            ->notEmpty('radiotherapy');

        $validator
            ->boolean('artificial_heart_valves')
            ->requirePresence('artificial_heart_valves', 'create')
            ->notEmpty('artificial_heart_valves');

        $validator
            ->boolean('weightloss')
            ->requirePresence('weightloss', 'create')
            ->notEmpty('weightloss');

        $validator
            ->boolean('back_problems')
            ->requirePresence('back_problems', 'create')
            ->notEmpty('back_problems');

        $validator
            ->boolean('respiratory_diseases')
            ->requirePresence('respiratory_diseases', 'create')
            ->notEmpty('respiratory_diseases');

        $validator
            ->boolean('diabetes')
            ->requirePresence('diabetes', 'create')
            ->notEmpty('diabetes');

        $validator
            ->boolean('low_blood_pressure')
            ->requirePresence('low_blood_pressure', 'create')
            ->notEmpty('low_blood_pressure');

        $validator
            ->boolean('epilepsy')
            ->requirePresence('epilepsy', 'create')
            ->notEmpty('epilepsy');

        $validator
            ->boolean('hepatitis')
            ->requirePresence('hepatitis', 'create')
            ->notEmpty('hepatitis');

        $validator
            ->boolean('cancer')
            ->requirePresence('cancer', 'create')
            ->notEmpty('cancer');

        $validator
            ->boolean('psychiatric_treatment')
            ->requirePresence('psychiatric_treatment', 'create')
            ->notEmpty('psychiatric_treatment');

        $validator
            ->boolean('special_diet')
            ->requirePresence('special_diet', 'create')
            ->notEmpty('special_diet');

        $validator
            ->boolean('diseases_of_the_blood')
            ->requirePresence('diseases_of_the_blood', 'create')
            ->notEmpty('diseases_of_the_blood');

        $validator
            ->boolean('arthritis')
            ->requirePresence('arthritis', 'create')
            ->notEmpty('arthritis');

        $validator
            ->boolean('swollen_neck_glands')
            ->requirePresence('swollen_neck_glands', 'create')
            ->notEmpty('swollen_neck_glands');

        $validator
            ->boolean('rheumatic_fever')
            ->requirePresence('rheumatic_fever', 'create')
            ->notEmpty('rheumatic_fever');

        $validator
            ->boolean('vih')
            ->requirePresence('vih', 'create')
            ->notEmpty('vih');

        $validator
            ->boolean('cerebral_embolism')
            ->requirePresence('cerebral_embolism', 'create')
            ->notEmpty('cerebral_embolism');

        $validator
            ->boolean('ulcers')
            ->requirePresence('ulcers', 'create')
            ->notEmpty('ulcers');

        $validator
            ->boolean('venereal_diseases')
            ->requirePresence('venereal_diseases', 'create')
            ->notEmpty('venereal_diseases');

        $validator
            ->boolean('hemophilia')
            ->requirePresence('hemophilia', 'create')
            ->notEmpty('hemophilia');

        $validator
            ->boolean('osteoporosis')
            ->requirePresence('osteoporosis', 'create')
            ->notEmpty('osteoporosis');

        $validator
            ->boolean('liver_diseases')
            ->requirePresence('liver_diseases', 'create')
            ->notEmpty('liver_diseases');

        $validator
            ->boolean('chronic_diarrhea')
            ->requirePresence('chronic_diarrhea', 'create')
            ->notEmpty('chronic_diarrhea');

        $validator
            ->boolean('drug_addiction')
            ->requirePresence('drug_addiction', 'create')
            ->notEmpty('drug_addiction');

        $validator
            ->boolean('allergies_to_anesthetics')
            ->requirePresence('allergies_to_anesthetics', 'create')
            ->notEmpty('allergies_to_anesthetics');

        $validator
            ->boolean('allergies_to_medicines')
            ->requirePresence('allergies_to_medicines', 'create')
            ->notEmpty('allergies_to_medicines');

        $validator
            ->boolean('allergies_to_general')
            ->requirePresence('allergies_to_general', 'create')
            ->notEmpty('allergies_to_general');

        $validator
            ->boolean('others')
            ->requirePresence('others', 'create')
            ->notEmpty('others');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
