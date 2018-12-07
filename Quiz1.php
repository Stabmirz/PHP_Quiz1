<center>
<?php
$title = '99 Bottles of Beer<hr>';
echo $title;
for ($i=10; $i>=0; $i--)
{
if ($i==0) printf ("No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 10 bottles of beer on the wall.<br><br>");
elseif ($i==1) printf ("1 bottle of beer on the wall, 1 bottle of beer. Take it down and pass it around, no more bottles of beer on the wall.<br><br>");
else printf ($i." bottles of beer on the wall, ".$i." bottles of beer. Take one down and pass it around, ".($i-1)." bottles of beer on the wall.<br><br>");
}
?><center>