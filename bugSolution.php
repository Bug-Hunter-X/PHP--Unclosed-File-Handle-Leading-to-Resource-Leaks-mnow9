```php
$file = fopen("myfile.txt", "r+");
if ($file) {
    // ... process the file ...
    fclose($file);
}
else{
    //Handle error, file couldn't be opened
}
```