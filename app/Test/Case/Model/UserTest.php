<?php
App::uses('User', 'Model');

/**
 * User Test Case
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.athlete',
		'app.sport',
		'app.subcategory',
		'app.category',
		'app.review',
		'app.event',
		'app.athletes_event'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}
        
        public function testValidationVersusUserIdLettre() {
    $data = array(
			'User' => array(
				'username' => 'email est mauvais !!',
				'email' => 'asdjnas'
			)
		);

		// Attempt to save
		$result = $this->User->save($data);

		// Test save failed
		$this->assertFalse($result);
        }

}
