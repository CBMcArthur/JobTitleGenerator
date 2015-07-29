<?php
/*
 * File: title_generator.php
 * Author: Christian McArthur
 * Date Created: 07/25/2015
 * Last Modified: 07/26/2015
 *
 * This is a quick and dirty PHP-based random title generator.
 * Titles will consist of several parts as follows:
 *   >Prefix< >Major< of >Minor Prefix< >Minor<
 * Title parts are randomly selected from an array for each part.
*/


// Title prefixes
$prefix = array("Assistant", "Vice", "Lead", "Junior", "Chief", "Technical"); 
// Major titles
$major = array("President", "Manager", "Director", "Analyst", "Designer", "Supervisor");
// Minor prefixes
$preminor = array("Special", "Public", "Private", "Personal", "Advanced", "Benefits");
// Minor titles 
$minor = array("Projects", "Communication", "Development", "Marketing", "Accounting", "Engineering");

// Randomly select title part elements
$pick_prefix = rand(0, count($prefix));
$pick_major = rand(1, count($major));
$pick_preminor = rand(0, count($preminor));
$pick_minor = rand(1, count($minor));

// Display the randomly constructed title
echo ($pick_prefix == 0 ? "" : $prefix[$pick_prefix-1]." ");
echo $major[$pick_major-1]." of ";
echo ($pick_preminor == 0 ? "" : $preminor[$pick_preminor-1]." ");
echo $minor[$pick_minor-1];
echo "\n";
?>
