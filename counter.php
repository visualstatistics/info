<?php
$counter_file = 'counter.txt';

// Check if the counter file exists, if not create it
if (!file_exists($counter_file)) {
    file_put_contents($counter_file, '0');
}

// Read the current count from the file
$count = intval(file_get_contents($counter_file));

// Increment the count
$count++;

// Write the new count back to the file
file_put_contents($counter_file, $count);

// Output the count
echo $count;
?>