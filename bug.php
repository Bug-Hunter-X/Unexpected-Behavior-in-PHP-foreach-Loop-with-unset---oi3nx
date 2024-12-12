function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

// The issue here is that the foreach loop modifies the array while iterating over it, which can lead to unexpected results.  The unset() call will change the array's indices.  A better approach would be to create a new array containing the elements you want to keep.