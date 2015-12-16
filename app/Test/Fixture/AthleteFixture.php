<?php
/**
 * Athlete Fixture
 */
class AthleteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 35, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'versus' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 35, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'athlete_image' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'sport_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'subcategory_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'name' => 'Malik',
			'versus' => 'Canada',
			'athlete_image' => 'uploads/gael.jpg',
			'user_id' => '8',
			'sport_id' => '1',
			'subcategory_id' => '0'
		),
		array(
			'id' => '2',
			'name' => 'Tristan',
			'versus' => 'USA',
			'athlete_image' => 'uploads/big_boss.jpg',
			'user_id' => '8',
			'sport_id' => '1',
			'subcategory_id' => '0'
		),
		array(
			'id' => '11',
			'name' => 'Malik',
			'versus' => 'China',
			'athlete_image' => '',
			'user_id' => '6',
			'sport_id' => '1',
			'subcategory_id' => '0'
		),
		array(
			'id' => '13',
			'name' => 'Tristan',
			'versus' => 'Russia',
			'athlete_image' => '',
			'user_id' => '6',
			'sport_id' => '2',
			'subcategory_id' => '0'
		),
		array(
			'id' => '14',
			'name' => 'Tristan',
			'versus' => 'Tristan',
			'athlete_image' => 'uploads/gael.jpg',
			'user_id' => '8',
			'sport_id' => '1',
			'subcategory_id' => '0'
		),
		array(
			'id' => '15',
			'name' => 'Ma',
			'versus' => 'Ma',
			'athlete_image' => 'uploads/gael.jpg',
			'user_id' => '8',
			'sport_id' => '1',
			'subcategory_id' => '0'
		),
		array(
			'id' => '16',
			'name' => 'Mathieu',
			'versus' => 'Ma',
			'athlete_image' => '',
			'user_id' => '6',
			'sport_id' => '2',
			'subcategory_id' => '2'
		),
		array(
			'id' => '17',
			'name' => 'Bruno',
			'versus' => 'sa',
			'athlete_image' => '',
			'user_id' => '8',
			'sport_id' => '1',
			'subcategory_id' => '5'
		),
	);

}
