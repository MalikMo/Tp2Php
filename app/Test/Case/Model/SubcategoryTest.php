<?php
App::uses('Subcategory', 'Model');

/**
 * Subcategory Test Case
 */
class SubcategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.subcategory',
		'app.category',
		'app.athlete',
		'app.user',
		'app.sport',
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
		$this->Subcategory = ClassRegistry::init('Subcategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Subcategory);

		parent::tearDown();
	}
        public function testGetSubcategoriesByCategory() {
        $result = $this->Subcategory->getSubcategoriesByCategory(2);
//            debug($result); die();
        $expected = array(
            (int) 4 => 'agent-libre',
            (int) 5 => 'fantasy',
            (int) 6 => 'enthousiaste'
        );
        $this->assertEquals($expected, $result);
//		$this->markTestIncomplete('testGetSubcategoriesByCategory not implemented.');
    }
    
      public function testGetSubcategoriesByCategoryMauvaisNumero() {
        $result = $this->Subcategory->getSubcategoriesByCategory(22);
//            debug($result); die();
        $this->assertEmpty($result);
//		$this->markTestIncomplete('testGetSubcategoriesByCategory not implemented.');
    }
    
    public function testGetSubcategoriesByCategoryVide() {
        $result = $this->Subcategory->getSubcategoriesByCategory();
//            debug($result); die();
        $expected = array();
        $this->assertEquals($expected, $result);
//		$this->markTestIncomplete('testGetSubcategoriesByCategory not implemented.');
    }
        

}
