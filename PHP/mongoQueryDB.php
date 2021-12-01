
<?php
require 'vendor/autoload.php';

// 1. Connect to MongoDB
	
// 2. Get collection

// 3. Query one

// 3.1 Display one
//var_dump($recvdData);

// 4.  Search for metrics.statistics.characters > 950000

// 5. Display the results bibliography.title & metrics.statistics.characters 
print("\nLots of characters\n\n");

// 6. Aggregate: match metrics.statistics.characters > 950000 and sort on metrics.statistics.characters

// 7. Display the results bibliography.title & metrics.statistics.characters 
print("\nSORTED Lots of characters\n\n");

// 8. Aggregate: match bibliography.author.name regex Bront, group by bibliography.author.name and sum, and sort on sum

// 9. Display the results name and sum
print("\nLots of Brontes\n\n");
 
?>
