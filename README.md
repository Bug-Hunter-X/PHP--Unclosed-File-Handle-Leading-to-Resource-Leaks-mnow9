# PHP Unclosed File Handle

This repository demonstrates a common error in PHP: forgetting to close file handles opened using `fopen()`.  Failure to close the file can result in resource exhaustion and data corruption, particularly when dealing with large files or concurrent file operations.  The `bug.php` file shows the erroneous code; `bugSolution.php` presents the corrected version.