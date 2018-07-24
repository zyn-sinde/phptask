<?php
/**
 * Created by PhpStorm.
 * User: yanan.zhang04
 * Date: 2018/7/22
 * Time: 下午4:18
 */
//在页面上显示下所有文件的路径及大小, 以json格式显示.
class Find_file_path
{
    function _construct()
    {

}
    /*function Searchfile($d)
    {
        $arr = array();//先外层定义一个一维数组

        if (is_dir($d)) {//判断是否是文件夹
            $file = opendir($d);//打开文件夹
            while (($filename = readdir($file)) !== false) {//读取文件夹，并判断文件夹类型是否是为false
                $file_arr = array();//在while循环再加一个一维数组
                $file_arr["name"] = $filename;//加入键值把索引数组变成关联数组
                $file_arr["path"] = realpath($filename);
                $file_arr["size"] = filesize($filename);
                $arr[] = $file_arr;//变成二维数组

                //echo $filename."----".realpath($filename). "----".filesize($filename)."\n";
                // echo json_encode($filename."----".realpath($filename). "----".filesize($filename));

            }
            closedir($file);


        }


        //return $arr;
        return json_encode($arr);


    }

    */
//根据所给路径搜索文件名
    function Searchfiles($d)
    {
        $name_arr=array();
        if (is_dir($d))
        {
            $file=opendir($d);
            while(($filename=readdir($file))!==false){
                $name_arr[]=$filename;

            }
            closedir($file);

        }

        return $name_arr;

    }
 //根据文件名获取路径和大小

    function Revert($name_arr)
    {

        $revert=array();
        foreach($name_arr as $name){
            //echo "$name\n";
            $revert_arr=array();
            $revert_arr["path"]=realpath($name);
           // echo $revert_arr;
            $revert_arr["size"]=filesize($name);
            $revert=$revert_arr;


            echo json_encode($name."++++".realpath($name). "----".filesize($name));
        }
        //return json_encode($revert);
        //echo $revert;
        return $revert;


    }


}




$obj=new Find_file_path();
$item= $obj->Searchfiles("/Users/baidu/code/php/zyn");
echo $obj->Revert($item);





/*$t = "/Users/baidu/code/php/zyn";
$j=Searchfile($t);
echo json_encode($j);*/
