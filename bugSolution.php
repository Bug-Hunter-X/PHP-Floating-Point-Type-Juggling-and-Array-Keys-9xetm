The most robust solution is to avoid using floating-point numbers as array keys altogether. If you must use numbers as keys, convert them to integers or strings explicitly.  If you need to maintain precision, consider using the `bcadd` and `bcsub` functions for arbitrary-precision arithmetic.

```php
$array = [];
$key1 = (string) 1.1; // Explicitly convert to string
$key2 = (string) 1.1000000000000001; // Explicitly convert to string
$array[$key1] = 'value1';
$array[$key2] = 'value2';

var_dump($array); // Outputs a single key with the first value.
var_dump(array_key_exists($key1, $array)); // True
var_dump(array_key_exists($key2, $array)); // True
var_dump($array[$key1] === $array[$key2]); // True
```

Alternatively, if you are comparing for equality, consider using an epsilon value to account for floating-point inaccuracies:

```php
$epsilon = 0.00001; // Adjust as needed

if (abs($float1 - $float2) < $epsilon) {
    // Consider them equal
}
```
However, remember that using an epsilon value isn't always appropriate or sufficient for all applications.