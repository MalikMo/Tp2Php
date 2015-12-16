<?php
App::uses('Athlete', 'Model');

/**
 * Athlete Test Case
 */
class AthleteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.athlete',
		'app.user',
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
		$this->Athlete = ClassRegistry::init('Athlete');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Athlete);

		parent::tearDown();
	}

/**
 * testIsOwnedBy method
 *
 * @return void
 */
	public function testIsOwnedByFalse() {
             
		$testAthlete = $this->Athlete->isOwnedby(1,1);
                $this->assertFalse($testAthlete);
	
	}
        
        public function testIsOwnedByTrue() {
             
		$testAthlete = $this->Athlete->isOwnedby(1,8);
                $this->assertTrue($testAthlete);
	
	}

/**
 * testProcessImageUpload method
 *
 * @return void
 */
	public function testProcessImageUploadFormVide() {
		$data = array(
			'Athlete' => array(
				'name' => '',
				'athlete_image' => '',
				'versus' => '',
                            'user_id' => '',
                            'sport_id' => '',
                            'subcategory_id' => ''
			)
		);

		// Attempt to save
		$result = $this->Athlete->save($data);

		// Test save failed
		$this->assertFalse($result);
	}
        
        public function testProcessImageUploadCorrect() {
		$data = array(
			'Athlete' => array(
				'name' => 'Balik',
				'athlete_image' => 'uploads/gael.jpg',
				'versus' => 'USA',
                            'user_id' => '8',
                            'sport_id' => '1',
                            'subcategory_id' => '2'
			)
		);

		// Attempt to save
		$result = $this->Athlete->processImageUpload($data);

		// Test save failed
		$this->assertTrue($result);
	}
        
        public function testProcessImageUploadVide() {
		$data = array(
			'Athlete' => array(
				'name' => 'Balik',
				'athlete_image' => '',
				'versus' => 'USA',
                            'user_id' => '8',
                            'sport_id' => '1',
                            'subcategory_id' => '2'
			)
		);

		// Attempt to save
		$result = $this->Athlete->processImageUpload($data);

		// Test save failed
		$this->assertTrue($result);
	}
        
        public function testProcessImageUploadImageInexistant() {
		$data = array(
			'Athlete' => array(
				'name' => 'Balik',
				'athlete_image' => 'ajsdbnaios',
				'versus' => 'USA',
                            'user_id' => '8',
                            'sport_id' => '1',
                            'subcategory_id' => '2'
			)
		);

		// Attempt to save
		$result = $this->Athlete->processImageUpload($data);

		// Test save failed
		$this->assertTrue($result);
	}
        
        public function testValidationNameVide() {
    $data = array(
			'Athlete' => array(
				'name' => '',
				'versus' => 'here'
			)
		);

		// Attempt to save
		$result = $this->Athlete->save($data);
                $invalidFields = $this->Athlete->invalidFields();

		// Test save failed
		$this->assertFalse($result);
                $this->assertContains('notBlank', $invalidFields['name']);
        }
        
         public function testValidationVersusVide() {
    $data = array(
			'Athlete' => array(
				'name' => 'versus est VIDE !!',
				'versus' => ''
			)
		);

		// Attempt to save
		$result = $this->Athlete->save($data);
                $invalidFields = $this->Athlete->invalidFields();

		// Test save failed
		$this->assertFalse($result);
                $this->assertContains('notBlank', $invalidFields['versus']);
        }
        
        public function testValidationVersusUserIdLettre() {
    $data = array(
			'Athlete' => array(
				'name' => 'versus est VIDE !!',
				'user_id' => 'a'
			)
		);

		// Attempt to save
		$result = $this->Athlete->save($data);

		// Test save failed
		$this->assertFalse($result);
        }
     
            

}




/*$data = array(
			'Contact' => array(
				'name' => 'Balik',
				'athlete_image' => 'uploads/gael.jpg',
				'versus' => 'USA',
                            'user_id' => '8',
                            'sport_id' => '1',
                            'subcategory_id' => '2'
			)
		);
 */