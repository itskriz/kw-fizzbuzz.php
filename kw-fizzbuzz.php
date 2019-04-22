/* kw-fizzbuzz.php */
<?php
function fizzBuzz($min = 1, $max = 100, $fizz = 3, $buzz = 5) {
	$results = array();
	for ($i = $min; $i < $max + 1; $i++) {
		$result = '';
		if ($i % $fizz == 0) {
			$result .= 'Fizz';
		}
		if ($i % $buzz == 0) {
			$result .= 'Buzz';
		}
		if (empty($result)) {
			$result = $i;
		}
		array_push($results, $result);
	}
	return $results;
}
?>