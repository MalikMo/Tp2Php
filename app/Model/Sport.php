<?php
App::uses('AppModel', 'Model');
/**
 * Sport Model
 *
 * @property Athlete $Athlete
 */
class Sport extends AppModel {

    
    public $displayField = 'sport';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'sport' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Athlete' => array(
			'className' => 'Athlete',
			'foreignKey' => 'sport_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
