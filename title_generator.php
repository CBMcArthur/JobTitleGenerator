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

// Assemble the randomly constructed title
$title  = $pick_prefix == 0 ? "" : $prefix[$pick_prefix-1]." ";
$title .= $major[$pick_major-1]." of ";
$title .= $pick_preminor == 0 ? "" : $preminor[$pick_preminor-1]." ";
$title .= $minor[$pick_minor-1];

// Display the title and a refresh button
echo "<div>";
echo "<span style=\"font-weight:bold; font-size:20px; color:blue; margin-left:100px; \">".$title."</span><br />"; 
echo "<button type=\"submit\"  onClick=\"history.go(0)\" style=\"margin-left: 150px;\">Generate New Job Title</button>";
echo "</div>";
?>
