<?php
$x="PostgreSQL";
$y="MySQL";
$z=&$x;
$x="PHP 5";
$y=&$x;
echo $x ,"<br />";
echo$y,"<br />";
echo$z,"<br />";
echo $GLOBALS['x'],"<br />";
echo $GLOBALS['y'], "<br />";
echo $GLOBALS['z'], "<br />","<br />","<br />","<br />";