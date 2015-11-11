<?php

App::uses('AppModel', 'Model');

/**
 * Athlete Model
 *
 * @property User $User
 * @property Sport $Sport
 * @property Review $Review
 * @property Event $Event
 */
class Athlete extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'name' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'versus' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'user_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'sport_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'athlete_image' => array(
            // http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::uploadError
            'uploadError' => array(
                'rule' => 'uploadError',
                'message' => 'Something went wrong with the file upload',
                'allowEmpty' => TRUE,
            ),
            // http://book.cakephp.org/2.0/en/models/data-validation.html#Validation::mimeType
            'mimeType' => array(
                'rule' => array('mimeType', array('image/gif', 'image/png', 'image/jpg', 'image/jpeg')),
                'message' => 'Invalid file, only images allowed',
                'allowEmpty' => TRUE,
            ),
            'filesize' => array(
                'rule' => array('filesize', '<=', '1MB'),
                'message' => 'Article image must be less then 1MB',
                'allowEmpty' => TRUE,
            ),
            // custom callback to deal with the file upload
            'processImageUpload' => array(
                'rule' => 'processImageUpload',
                'message' => 'Something went wrong processing your file',
                'allowEmpty' => TRUE,
            )
        )
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Sport' => array(
            'className' => 'Sport',
            'foreignKey' => 'sport_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
         'Subcategory' => array(
            'className' => 'Subcategory',
            'foreignKey' => 'subcategory_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Review' => array(
            'className' => 'Review',
            'foreignKey' => 'athlete_id',
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
    

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
        'Event' => array(
            'className' => 'Event',
            'joinTable' => 'athletes_events',
            'foreignKey' => 'athlete_id',
            'associationForeignKey' => 'event_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
        )
    );

    public function isOwnedBy($athlete, $user) {
        return $this->field('id', array('id' => $athlete, 'user_id' => $user)) !== false;
    }

    public function processImageUpload($check = array()) {
//    debug($check); die();
        // deal with uploaded file
        if (!empty($check['athlete_image']['tmp_name'])) {

            // check file is uploaded
            if (!is_uploaded_file($check['athlete_image']['tmp_name'])) {
                return FALSE;
            }

            // build full filename
            $filename = WWW_ROOT . 'img' . DS . 'uploads' . DS . $check['athlete_image']['name'];

            // @todo check for duplicate filename
            // try moving file
            if (!move_uploaded_file($check['athlete_image']['tmp_name'], $filename)) {
                return FALSE;

                // file successfully uploaded
            } else {
                // save the file path relative from WWW_ROOT e.g. uploads/example_filename.jpg
                $this->data[$this->alias]['athlete_image'] = 'uploads' . '/' . $check['athlete_image']['name'];
            }
        }

        return TRUE;
    }

    public function beforeValidate($options = array()) {
        // ignore empty file - causes issues with form validation when file is empty and optional
        if (!empty($this->data[$this->alias]['athlete_image']['error']) && $this->data[$this->alias]['athlete_image']['error'] == 4 && $this->data[$this->alias]['athlete_image']['size'] == 0) {
            unset($this->data[$this->alias]['athlete_image']);
        }

        parent::beforeValidate($options);
    }

}
