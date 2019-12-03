 <!DOCTYPE html>
<html>
<body>
 
 <?php
 /*Search in the webpage the list of countries and capitals*/
$page = file_get_contents("https://www.thoughtco.com/capitals-of-every-independent-country-1434452"); 
$nini = strpos($page,"The Countries of the World and their Capitals"); /* 57003*/
$nfin = strpos($page,"An important fact to note is that"); /*63787*/
$length = $nfin-$nini;
$list = substr($page,$nini,$length);
/*echo $list, '<br>';*/

/*Create an array with all the countries (tagged with the position of each :)*/
$dpoints = array('0');
for ($i=0; $i<strlen($list); $i++) {
    if ($list[$i]==':') {$dpoints=array_merge($dpoints,array($i));}
} 
/*
foreach($dpoints as $value) {
    echo $value, '<br>';
}*/

/* Choose a capital amongst the list*/
$codpo = count($dpoints);
$chosen = rand(0,$codpo);
echo $chosen, '<br>';

/* Build the capital name */
$k = $dpoints[$chosen]+2; $capital = array('');
do {  
    $capital=array_merge($capital,array($list[$k]));
    $k++;
    $let=$list[$k];
    if(ctype_upper($let)&&!($list[$k-1]==' '||$list[$k-1]=='-')){$cap=1;}
    else{$cap=0;}
    $res = $cap||$let=='*'||$let=='(';
} while(!$res);

foreach($capital as $value) {
    echo  $value; }


/* Build the country name */
$k = $dpoints[$chosen]; $country = array('');
do { 
    $k--;
    $let=$list[$k];
    if(ctype_upper($let)&&!($list[$k-1]==' '||$list[$k-1]=='-')){$cap=1;}
    else{$cap=0;}
    $country=array_merge($country,array($list[$k]));
} while(!$cap);
$country = array_reverse($country);

foreach($country as $value) {
    echo  $value; }


echo '<br>', $list;

?>

</body>
</html>