<?php
/* Frase Fixture generated on: 2012-01-29 18:35:36 : 1327880136 */

/**
 * FraseFixture
 *
 */
class FraseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'frase' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'frase' => 'Lorem ipsum dolor sit amet',
			'created' => '2012-01-29 18:35:36',
			'updated' => '2012-01-29 18:35:36'
		),
	);
}
