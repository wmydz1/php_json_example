<?php
/**
 * Created by PhpStorm.
 * User: samchen
 * Date: 2/14/16
 * Time: 20:12
 */

//$url='http://www.baidu.com/';
$url ='http://localhost/json/json.php';
$html = file_get_contents($url);
//echo $html;

// parse JSON
$obj=json_decode($html);

echo $obj->name; //displays mike
echo '<hr/>';
echo $obj->office[0]; //displays microsoft
echo '<hr/>';
foreach($obj->office as $val)
    echo $val . '<br/>';
?>