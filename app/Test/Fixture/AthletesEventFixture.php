<?php
/**
 * AthletesEvent Fixture
 */
class AthletesEventFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'athlete_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'event_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'athlete_id' => '1',
			'event_id' => '1'
		),
		array(
			'id' => '3',
			'athlete_id' => '1',
			'event_id' => '3'
		),
		array(
			'id' => '4',
			'athlete_id' => '9',
			'event_id' => '1'
		),
		array(
			'id' => '6',
			'athlete_id' => '10',
			'event_id' => '1'
		),
		array(
			'id' => '9',
			'athlete_id' => '13',
			'event_id' => '1'
		),
		array(
			'id' => '10',
			'athlete_id' => '1',
			'event_id' => '4'
		),
		array(
			'id' => '11',
			'athlete_id' => '2',
			'event_id' => '4'
		),
		array(
			'id' => '12',
			'athlete_id' => '11',
			'event_id' => '4'
		),
		array(
			'id' => '13',
			'athlete_id' => '14',
			'event_id' => '1'
		),
		array(
			'id' => '14',
			'athlete_id' => '15',
			'event_id' => '1'
		),
	);

}
