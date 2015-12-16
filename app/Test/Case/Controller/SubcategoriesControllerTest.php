<?php
App::uses('SubcategoriesController', 'Controller');

/**
 * SubcategoriesController Test Case
 */
class SubcategoriesControllerTest extends ControllerTestCase {

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
 * testGetByCategory method
 *
 * @return void
 */
	public function testGetByCategory() {
            $result = $this->Subcategory->getSubcategoriesByCategory(2);
//            debug($result); die();
        $expected = array(
            (int) 2 => 'classical',
            (int) 3 => 'rock',
            (int) 4 => 'jazz'
        );
        $this->assertEquals($expected, $result);
		$this->markTestIncomplete('testGetByCategory not implemented.');
	}

}
