<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'role' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => null),
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
			'id' => '6',
			'username' => 'user',
			'password' => '$2a$10$n7c8uvn3RleqvlPqw2H26.K/iVOWHOXjUbQnN34kEhymjtrTJU7Ey',
			'role' => 'user',
			'email' => 'MMalikMo@gmail.com',
			'active' => 1
		),
		array(
			'id' => '8',
			'username' => 'admin',
			'password' => '$2a$10$EscvhRQ0vqEww1dJTIiaZO8nor0sfEowNbuTMo4Dwysfa.7eGRohe',
			'role' => 'admin',
			'email' => 'Admin@gmail.com',
			'active' => 1
		),
		array(
			'id' => '9',
			'username' => 'Malik',
			'password' => '$2a$10$Pib3kkZQNoRjeNMiK9Nqk.kkPKNirMKnsGJ11/K/JajrgLrQsDJpm',
			'role' => 'user',
			'email' => 'MM@g.com',
			'active' => 0
		),
		array(
			'id' => '16',
			'username' => 'bruh',
			'password' => '$2a$10$veOBaLObkxwNS7YmZy7b7.Z5alkMTa9oY99fEPvTrUe6tdwwx.Oou',
			'role' => 'visitor',
			'email' => 'MMalikMo@gmail.com',
			'active' => 0
		),
		array(
			'id' => '17',
			'username' => 'lol',
			'password' => '$2a$10$vPaU1tYduikoPVNBmCSG7uHpph9xO63VhI2f0fhxvaUO21xS8ShVS',
			'role' => 'user',
			'email' => 'MMalikMo@gmail.com',
			'active' => 1
		),
		array(
			'id' => '18',
			'username' => 'lol',
			'password' => '$2a$10$XTv5CDxW7k/.jqAtAXXEJucsvgdZodA9jiZqfvQbXXbIuREtnUEQ6',
			'role' => 'user',
			'email' => 'MMalikMo@gmail.com',
			'active' => 0
		),
		array(
			'id' => '19',
			'username' => 'lol',
			'password' => '$2a$10$7YJ9LwG8CElo9lgBcu85duffI7cP/7xjQjfGX5FAQBIgipOaoftlC',
			'role' => 'user',
			'email' => 'MMalikMo@gmail.com',
			'active' => 0
		),
		array(
			'id' => '20',
			'username' => 'lol',
			'password' => '$2a$10$nEyzk4b3qg8h3kAt66ezuuBtMwsz9RSHqd8xGc1lgFexSuzVi7UmC',
			'role' => 'user',
			'email' => 'MMalikMo@gmail.com',
			'active' => 0
		),
		array(
			'id' => '21',
			'username' => 'lol',
			'password' => '$2a$10$zZy2JrMmBlgFQDFQHM8ehezRKz/kBA6wrW75aTBoEqjh5iS6I5IQq',
			'role' => 'user',
			'email' => 'MMalikMo@gmail.com',
			'active' => 0
		),
		array(
			'id' => '22',
			'username' => 'lol',
			'password' => '$2a$10$my84KLsZcWcBiY04BN0nZeAWS4RT7LF9OqplaIB67wShXOILIqGsi',
			'role' => 'user',
			'email' => 'MMalikMo@gmail.com',
			'active' => 0
		),
	);

}
