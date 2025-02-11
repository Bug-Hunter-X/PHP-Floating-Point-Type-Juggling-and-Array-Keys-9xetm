# PHP Floating-Point Type Juggling and Array Keys

This repository demonstrates a subtle bug in PHP related to type juggling and the use of floating-point numbers as array keys.  When a floating-point number is used as an array key, PHP implicitly converts it to a string. However, due to the inherent imprecision of floating-point numbers, numerically identical values may result in different string representations. This can lead to unexpected behavior when comparing array keys or using these keys for comparisons.

The `bug.php` file contains the problematic code exhibiting this issue. The `bugSolution.php` provides a solution.