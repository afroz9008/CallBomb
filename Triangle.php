<?php
echo "This is Created By Sorathiya Afroz\n";
$a=10;
echo "Value of A =".$a."\n"; 
for($i=0;$i<$a;$i++)
{
   for($k=$a-1;$k>$i;$k--) 
   {
       echo "  ";
   }
   for($j=0;$j<=$i;$j++)
   {
      echo "* ";
   }
   for($j=1;$j<=$i;$j++)
   {
       echo "* ";
   }
   echo "\n";
}
echo "\n---------------AFROZ H.---------------";
?>
