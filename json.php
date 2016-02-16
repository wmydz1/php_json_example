<?php
/**
 * Created by PhpStorm.
 * User: samchen
 * Date: 2/14/16
 * Time: 20:14
 */

$json_data = array ('id'=>1,'name'=>"mike",'country'=>'usa',"office"=>array("microsoft","oracle"));
echo json_encode($json_data);