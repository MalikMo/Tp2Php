<?php
/**
 * Sportchoice Fixture
 */
class SportchoiceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'name' => 'Football',
			'created' => '2015-11-09 17:42:47',
			'modified' => '2015-11-09 17:42:47'
		),
		array(
			'id' => '2',
			'name' => 'Basketball',
			'created' => '2015-11-09 17:42:47',
			'modified' => '2015-11-09 17:42:47'
		),
		array(
			'id' => '3',
			'name' => 'Soccer',
			'created' => '2015-11-09 17:42:47',
			'modified' => '2015-11-09 17:42:47'
		),
		array(
			'id' => '4',
			'name' => 'Rugby',
			'created' => '2015-11-09 17:42:47',
			'modified' => '2015-11-09 17:42:47'
		),
		array(
			'id' => '5',
			'name' => 'Badminton',
			'created' => '2015-11-09 17:42:47',
			'modified' => '2015-11-09 17:42:47'
		),
		array(
			'id' => '6',
			'name' => 'Fistball',
			'created' => '2015-11-09 17:42:47',
			'modified' => '2015-11-09 17:42:47'
		),
		array(
			'id' => '7',
			'name' => 'Tennis',
			'created' => '2015-11-09 17:42:47',
			'modified' => '2015-11-09 17:42:47'
		),
		array(
			'id' => '8',
			'name' => 'Cadillac',
			'created' => '2015-11-09 17:42:47',
			'modified' => '2015-11-09 17:42:47'
		),
		array(
			'id' => '9',
			'name' => 'Volleyball',
			'created' => '2015-11-09 17:42:47',
			'modified' => '2015-11-09 17:42:47'
		),
		array(
			'id' => '10',
			'name' => 'Archery',
			'created' => '2015-11-09 17:42:47',
			'modified' => '2015-11-09 17:42:47'
		),
	);

}
