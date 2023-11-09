<?php


require_once(__DIR__ ."/../functions.php");
/**
 * Class TestFunctions
 *
 * @package Tutoring_Php_Test
 */

/**
 * Sample test case.
 */
final class TestFunctions extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	public function test_add_numbers_returns_sum() {
		$expected = 3;
    $output = add_numbers(1, 2);
    $this->assertEquals($expected, $output);
	}
}
