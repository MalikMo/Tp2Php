<?php
/**
 * Sport Fixture
 */
class SportFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'sport' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 35, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'sport' => 'Football'
		),
		array(
			'id' => '2',
			'sport' => 'BaseBall'
		),
		array(
			'id' => '3',
			'sport' => 'a'
		),
	);

}
