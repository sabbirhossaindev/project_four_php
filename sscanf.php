<?php
$name = "Sabbir Hossain 01888559287 mdsabbir477470@gnail.com";
// $parts = sscanf($name, "%s %s %11 %s");
// print_r($parts);

sscanf($name, "%s %s %11 %s", $fname, $lname, $mobile, $email);
echo $email;