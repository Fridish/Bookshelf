<?php
//this file contains the funcltion that sorts the books in decending order in the chosen catergory. In the future, i might add a asc function aswell. 
function sortBooks($bookArray, $keyName)
{
    foreach ($bookArray as $key => $value) {
        $keyValue[] = $value[$keyName];
    }
    asort($keyValue);
    foreach ($keyValue as $key => $value) {
        $newOrder[] = $bookArray[$key];
    }
    return $newOrder;
}
$author = sortBooks($books, "author");
$year = sortBooks($books, "releaseYear");
$title = sortBooks($books, "title");
