<!DOCTYPE html>
<html>
<body>

<?php
function erDebug($var, $title='', $return=false) {
	if ($return) return highlight_string($title.': '.print_r($var, true), true);
	highlight_string($title.': '.print_r($var, true));
}
function xml2array( $xmlObject, $out=array())
{
        foreach ((array)$xmlObject as $index=>$node)
            $out[$index] = (is_object($node))? xml2array($node) : $node;

        return $out;
}

$url = 'https://spreadsheets.google.com/feeds/list/1PGEl82nfwTA0iUoV5OGZBCQ-SF0vb80MvhoZ7Tg0FDk/1/public/full/d5fpr';
$data = file_get_contents($url);
$doc = new DOMDocument();
$doc->load($data);
$destinations = $doc->document.querySelector('link[rel="self"]');
foreach ($destinations as $destination) {
    foreach($destination->childNodes as $child) {
        if ($child->nodeType == XML_CDATA_SECTION_NODE) {
            echo $child->textContent . "<br/>";
        }
    }
}

$items = simplexml_load_string($data);

?>

</body>
</html>
