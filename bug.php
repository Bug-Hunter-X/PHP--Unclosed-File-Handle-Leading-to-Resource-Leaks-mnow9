```php
$file = fopen("myfile.txt", "r+");
if ($file) {
    // ... process the file ...
    fclose($file); //Missing fclose
}
```