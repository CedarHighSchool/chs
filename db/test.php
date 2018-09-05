<?php
$url = "http://allrecipes.com/recipe/231082/just-like-wendys-chili/?internalSource=popular&referringContentType=home%20page&clickId=cardslot%206";

$info = file_get_contents($url);
$test = new DOMDocument();
$test->loadXML($info);
$books = $dom->getElementsByTagName('p');
foreach ($books as $book) {
    echo $book->nodeValue."<br>";
}
?>