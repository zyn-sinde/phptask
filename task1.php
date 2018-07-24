<?php
/**
 * Created by PhpStorm.
 * User: yanan.zhang04
 * Date: 2018/7/22
 * Time: 下午1:49
 */

$ret= array(1,"zyn","name"=>"zzz","age"=>12);
//var_dump($ret);
foreach($ret as $item){
    echo "$item\n";
}
foreach ($ret as $key=>$item){
    echo "$key=>$item\n";
}

/*for ($i=0;$i<4;$i++){
    echo "$ret[$i]\n";
}*/

/*//while循环
$i = 0;
while ($i<4){
    echo "$ret[$i]\n";
    $i++;
}*/

//if循环
/*date_default_timezone_set("prc");
echo date("Y-m-d H:i:s\n");
$ret=date("H");
if ($ret>12){
    echo "welcome\n";
}elseif ($ret<=12 & $ret>8){
    echo "morning\n";
}else{
    echo "linchen\n";
}

//switch循环
switch ($ret){
    case 1 : echo "yidian\n";
      break ;
    case 13 :echo "14dian\n";
        break;
    default:
        echo "weizhaodao";

}
*/

