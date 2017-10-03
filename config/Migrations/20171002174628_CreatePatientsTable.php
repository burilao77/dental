<?php
use Migrations\AbstractMigration;

class CreatePatientsTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('patients');
        $table->addColumn('full_name', 'string', array('limit' => 150))
              ->addColumn('ci', 'string')
              ->addColumn('email', 'string', array('limit' => 150))
              ->addColumn('gender', 'enum', array('values' => 'male, female'))
              ->addColumn('age', 'integer')
              ->addColumn('address', 'string')
              ->addColumn('phone', 'string')
              ->addColumn('heart_problems', 'boolean')   
              ->addColumn('high_blood_pressure', 'boolean')      
              ->addColumn('circulatory_problems', 'boolean')
              ->addColumn('nervous_problems', 'boolean')
              ->addColumn('radiotherapy', 'boolean')
              ->addColumn('artificial_heart_valves', 'boolean')
              ->addColumn('weightloss', 'boolean')
              ->addColumn('back_problems', 'boolean')
              ->addColumn('respiratory_diseases', 'boolean')
              ->addColumn('diabetes', 'boolean')
              ->addColumn('low_blood_pressure', 'boolean')
              ->addColumn('epilepsy', 'boolean')
              ->addColumn('hepatitis', 'boolean')
              ->addColumn('cancer', 'boolean')
              ->addColumn('psychiatric_treatment', 'boolean')
              ->addColumn('special_diet', 'boolean')
              ->addColumn('diseases_of_the_blood', 'boolean')
              ->addColumn('arthritis', 'boolean')
              ->addColumn('swollen_neck_glands', 'boolean')
              ->addColumn('rheumatic_fever', 'boolean')
              ->addColumn('vih', 'boolean')
              ->addColumn('cerebral_embolism', 'boolean')
              ->addColumn('ulcers', 'boolean')
              ->addColumn('venereal_diseases', 'boolean')
              ->addColumn('hemophilia', 'boolean')
              ->addColumn('osteoporosis', 'boolean')
              ->addColumn('liver_diseases', 'boolean')
              ->addColumn('chronic_diarrhea', 'boolean')
              ->addColumn('drug_addiction', 'boolean')
              ->addColumn('allergies_to_anesthetics', 'boolean')
              ->addColumn('allergies_to_medicines', 'boolean')
              ->addColumn('allergies_to_general', 'boolean')
              ->addColumn('others', 'boolean')
              ->addColumn('active', 'boolean')
              ->addColumn('created', 'datetime')
              ->addColumn('modified', 'datetime')
              ->create();
    }
}
