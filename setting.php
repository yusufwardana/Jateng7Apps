<?php

$ur = array();
$ur["screenloader"] = FALSE;
$ur["datapage"] = "homepage";

$ur['blog_dir']=str_replace('\\','/',dirname($_SERVER['SCRIPT_NAME']));
if($ur['blog_dir']!='/') $ur['blog_dir']=$ur['blog_dir'].'/';

?>