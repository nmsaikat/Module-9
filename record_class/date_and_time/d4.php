<?php
echo mktime(0,0,0,12,12,1980)."\n";
echo strtotime("12-12-1980")."\n";
echo strtotime("now")."\n";
echo strtotime("+3 days")."\n";

echo date('H:i:s A' ,strtotime("13 August 2005 23:12:05"))."\n";
