<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @property \App\Model\Table\OrganizatorsTable|\Cake\ORM\Association\BelongsTo $Organizators
 * @property \App\Model\Table\ParticipantsTable|\Cake\ORM\Association\HasMany $Participants
 * @property \App\Model\Table\PrizesTable|\Cake\ORM\Association\HasMany $Prizes
 * @property \App\Model\Table\SpectatorsTable|\Cake\ORM\Association\HasMany $Spectators
 *
 * @method \App\Model\Entity\Event get($primaryKey, $options = [])
 * @method \App\Model\Entity\Event newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Event[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Event|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Event patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Event[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Event findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EventsTable extends Table
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

        $this->setTable('events');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Organizators', [
            'foreignKey' => 'organizator_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Participants', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('Prizes', [
            'foreignKey' => 'event_id'
        ]);
        $this->hasMany('Spectators', [
            'foreignKey' => 'event_id'
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
            ->scalar('nazwa')
            ->maxLength('nazwa', 255)
            ->requirePresence('nazwa', 'create')
            ->allowEmptyString('nazwa', false);

        $validator
            ->scalar('miejsce')
            ->maxLength('miejsce', 255)
            ->requirePresence('miejsce', 'create')
            ->allowEmptyString('miejsce', false);

        $validator
            ->scalar('opis')
            ->requirePresence('opis', 'create')
            ->allowEmptyString('opis', false);

        $validator
            ->dateTime('date_start')
            ->requirePresence('date_start', 'create')
            ->allowEmptyDateTime('date_start', false);

        $validator
            ->dateTime('date_stop')
            ->requirePresence('date_stop', 'create')
            ->allowEmptyDateTime('date_stop', false);

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
        $rules->add($rules->existsIn(['organizator_id'], 'Organizators'));

        return $rules;
    }
}
