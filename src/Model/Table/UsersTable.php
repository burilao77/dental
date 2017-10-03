<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\ConsultationsTable|\Cake\ORM\Association\HasMany $Consultations
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->addBehavior('Proffer.Proffer', [
            'photo' => [    // The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'photo_dir',   // The name of the field to store the folder
                'thumbnailSizes' => [ // Declare your thumbnails
                    'square' => [   // Define the prefix of your thumbnail
                        'w' => 300, // Width
                        'h' => 300, // Height
                        'crop' => true,
                        'jpeg_quality'  => 100
                    ]
                  ],
                'thumbnailMethod' => 'gd'   // Options are Imagick or Gd
            ]
        ]);

        $this->hasMany('Consultations', [
            'foreignKey' => 'user_id'
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
            ->scalar('password')
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->scalar('phone')
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');
        
        $validator
            ->provider('proffer', 'Proffer\Model\Validation\ProfferRules')

            ->add('photo', 'proffer', [
                'rule' => ['dimensions', [
                    'min' => ['w' => 300, 'h' => 300],
                    'max' => ['w' => 1500, 'h' => 1500]
                ]],
                'message' => 'Las dimensiones sobrepasan las establecidas.',
                'provider' => 'proffer'
            ])
            ->add('photo', 'extension', [
                'rule' => ['extension', ['jpeg', 'png', 'jpg', 'gif']],
                'message' => 'La extención de la imagen no esta permitida',
            ])
            ->add('photo', 'fileSize', [
                'rule' => ['fileSize', '<=', '2MB'],
                'message' => 'La imagen excede el tamaño permitido',
            ])
            ->add('photo', 'mimeType', [
                'rule' => ['mimeType', ['image/jpeg', 'image/png']],
                'message' => 'Formato de la imagen es incorrecto',
            ])
            ->requirePresence('photo', 'create')
            ->notEmpty('photo', null, 'create');
      
        $validator
            ->scalar('role')
            ->requirePresence('role', 'create')
            ->notEmpty('role');

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
