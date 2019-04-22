kw-fizzbuzz.php
======

A simple web developer aptitude test using PHP.

Given that FizzBuzz is all the rage lately, I figured I'd try my hand at it. I've never been asked for this in an interview but kind of wish I had been asked this every time.

## Usage

The script will output an array with results.

To generate default FizzBuzz results (range 1-100, fizz 3, buzz 5);
```
<?php print_r( fizzbuzz() ); ?>
```

You can customize the range, fizz, and buzz values by passing parameters to the function:
```
<?php print_r( $min, $max, $fizz, $buzz ); ?>
```
