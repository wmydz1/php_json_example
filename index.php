<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: samchen
 * Date: 2/14/16
 * Time: 20:07
 */

$json_data = array ('id'=>1,'name'=>"mike",'country'=>'usa',"office"=>array("microsoft","oracle"));
echo json_encode($json_data);

$json_string='{"id":1,"name":"mike","country":"usa","office":["microsoft","oracle"]} ';
$obj=json_decode($json_string);
echo '<hr/>';
echo $obj->name; //displays mike
echo '<hr/>';
echo $obj->office[0]; //displays microsoft
echo '<hr/>';
foreach($obj->office as $val)
    echo $val . '<br/>';

?>
</body>
</html>