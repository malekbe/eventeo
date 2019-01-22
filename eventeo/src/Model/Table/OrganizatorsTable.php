<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Organizators Model
 *
 * @property \App\Model\Table\EventsTable|\Cake\ORM\Association\HasMany $Events
 *
 * @method \App\Model\Entity\Organizator get($primaryKey, $options = [])
 * @method \App\Model\Entity\Organizator newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Organizator[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Organizator|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Organizator|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Organizator patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Organizator[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Organizator findOrCreate($search, callable $callback = null, $options = [])
 */
class OrganizatorsTable extends Table
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

        $this->setTable('organizators');
        $this->setDisplayField('email');
        $this->setPrimaryKey('id');

        $this->hasMany('Events', [
            'foreignKey' => 'organizator_id'
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
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('adres')
            ->requirePresence('adres', 'create')
            ->allowEmptyString('adres', false);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email', false);

        $validator
            ->scalar('telefon')
            ->maxLength('telefon', 255)
            ->requirePresence('telefon', 'create')
            ->allowEmptyString('telefon', false);

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
