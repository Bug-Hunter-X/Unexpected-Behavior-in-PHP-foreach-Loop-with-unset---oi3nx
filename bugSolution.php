function foo(array $arr) {
  $newArray = [];
  foreach ($arr as $value) {
    if ($value !== 'bar') {
      $newArray[] = $value;
    }
  }
  return $newArray;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [1] => baz )