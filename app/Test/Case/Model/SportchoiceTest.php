<?php
App::uses('Sportchoice', 'Model');

/**
 * Sportchoice Test Case
 */
class SportchoiceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sportchoice'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sportchoice = ClassRegistry::init('Sportchoice');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sportchoice);

		parent::tearDown();
	}

/**
 * testGetSportchoicesNames method
 *
 * @return void
 */
	public function testGetSportchoicesNames() {
		$testSportNames = $this->Sportchoice->getSportchoicesNames("V");
                $this->assertEqual($testSportNames, array("9" => "Volleyball"));
	}
        
        public function testGetSportchoicesNamesWithOneLetterAndTwoHits() {
		$testSportNames = $this->Sportchoice->getSportchoicesNames("F");
                $this->assertEqual($testSportNames, array("1" => "Football","6" => "Fistball"));
	}
        
        public function testGetSportchoicesNamesWithTwoLettre() {
		$testSportNames = $this->Sportchoice->getSportchoicesNames("FO");
                $this->assertEqual($testSportNames, array("1" => "Football"));
	}
        
        public function testGetSportchoicesNamesWithLettreInexistant() {
		$testSportNames = $this->Sportchoice->getSportchoicesNames("U");
                $this->assertEqual($testSportNames, array());
	}
        
         public function testGetSportchoicesNamesWithNull() {
		$testSportNames = $this->Sportchoice->getSportchoicesNames("");
                $this->assertFalse($testSportNames);
	}
        

}
