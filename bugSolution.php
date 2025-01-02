The solution involves using the `isset()` function to check if the key exists before trying to access the array element:
```php
<?php
$myArray = ['existing_key' => 'some value'];
if (isset($myArray['missing_key'])) {
  echo $myArray['missing_key'];
} else {
  // Handle the case where the key is not found.
  echo 'Key "missing_key" not found';
  //Or you could assign a default value:
  //$myArray['missing_key'] = 'default value';
  //echo $myArray['missing_key'];
}
?>
```
Alternatively, you can use the null coalescing operator (`??`) for a more concise solution:
```php
<?php
$myArray = ['existing_key' => 'some value'];
echo $myArray['missing_key'] ?? 'Key "missing_key" not found';
?>
```