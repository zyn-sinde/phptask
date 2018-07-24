<?php
/**
 * Created by PhpStorm.
 * User: yanan.zhang04
 * Date: 2018/7/22
 * Time: 下午3:36
 */


/*
 * 单例模式要求：
 * 一个私有构造函数
 * 一个保存类的实例的静态成员变量
 * 一个访问这个实力的公共的静态方法
 *
 * 好处：单例模式就是让类的一个对象成为系统中的唯一实例，避免大量的 new 操作消耗的资源
 * */
class Single{
    private function _construct(){//私有是为了防止外部代码使用new来创建对象

    }
    static public $instance;
    static public function getinstance(){
        if(!self::$instance) self::$instance=new Single();//判断instance是否被实力话，如果未被实力话就new一个，如果实力话来就直接返回
        return self::$instance;
    }
    public function test($i){
        echo "$i\n";
    }
}

$ret = Single::getinstance();//第一次实力话
echo $ret->test(tastzzz);//第一次调用
$ret1=Single::getinstance();//第二次实力话，因为已经存在不用再new一次
echo $ret1->test(testyyy);//第二次调用
