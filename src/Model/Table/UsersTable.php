<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Seld\PharUtils\Timestamps;

class UsersTable extends Table {

    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');

        //adiciona no banco todas prop Timestamp
        $this->addBehavior('Timestamp');
    }


    // Campos requeridos
    public function validationDefault(Validator $validator){

        $validator
        ->integer('id')
        ->allowEmpty('id', 'create');

        $validator
        ->requirePresence('name', 'create')
        ->notEmpty('name');

        $validator
        ->requirePresence('email', 'create')
        ->notEmpty('email');

        $validator
        ->requirePresence('username', 'create')
        ->notEmpty('username');

        $validator
        ->requirePresence('password', 'create')
        ->notEmpty('password');

        return $validator;
    }

    // Regras para campos unicos (não duplicados)
    public function buildRules(RulesChecker $rules){

        $rules->add($rules->isUnique(['email'], 'Este e-mail já esta cadastrado!'));
        $rules->add($rules->isUnique(['username'], 'Este usuário já esta cadastrado!'));
        return $rules;
    }
}

