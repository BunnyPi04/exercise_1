<?php

$patterns = array();
$alphas = range('A', 'Z');
for ($i=0; $i<26; $i++) {
    $patterns[$i]="/".$alphas[$i]."/";
}
$replacements = array();
$replacements = array_map('strtolower', $patterns);

$arrayInput = array('kjhhdNVhJ'=>'aHnvdRljhI', 'hhsUgDh'=>'hgYdbKuyD');
var_dump($arrayInput);
echo "<br/>";
function replace($item) {
    GLOBAL $patterns;
    global $replacements;
    $item=preg_replace($patterns,$replacements, $item);
    $item=preg_replace(array("/\//", '/\s+/'), array('_', ''), $item);
    return $item;
}
$b = array_map('replace',$arrayInput);
var_dump($b);
echo "<br/>";
$c = array_flip($b);
$c = array_map('replace',$c);
$c = array_flip($c);
var_dump($c);

?>