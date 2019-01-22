<?php
/**
 * Created by PhpStorm.
 * User: cyf
 * Date: 2018/12/6
 * Time: 15:38
 */
//声明命名空间
namespace Home\Controller;

//使用一下系统类
use Think\Controller;

//声明当前控制器并且继承系统核心控制器
class JianController extends Controller{
    //index方法 前置操作
    public function _before_index(){
        echo "我是jian控制器的 index方法的前门";
    }
    public function index(){
        echo "我是jian控制器的 index方法";
    }
    //index方法 后置操作
    public function _after_index(){
        echo "我是jian控制器的 index方法的后门";
    }
    //绑定参数
    public function del($id,$name){
//        $id=$_GET['id'];
        echo $id;
        echo $name;
    }
    //获取url
    public function getUrl(){
        echo U()."<hr>";//当前
        echo U('del')."<hr>";//跨方法调用
        echo U('index/del')."<hr>";//跨控制器
        echo U('anmin/index/del')."<hr>";//跨前后台
        echo U('anmin/index/del?id=3&name=zhangsan#name')."<hr>";//带参数1  带锚点
        echo U('anmin/index/del#del','id=4&name=lisi')."<hr>";//带参数2 带锚点
        echo U('anmin/index/del#array',array('id'=>5,'name'=>'wangwu'))."<hr>";//带参数3 带锚点

    }


}