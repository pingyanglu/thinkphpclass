<?php

namespace Admin\Controller;
use Think\Controller;
class MmController extends Controller {

    public function index(){
        header("Content-type: text/html;charset=utf-8");
//        echo '我是后台model';
//       实例化数据模型
//        $model = new \Admin\Model\UserModel();

        $model = D('User');
        $model->ababa();
        echo $model->ababa."---";
        var_dump($model);
    }

    public function index1(){
        //M
//        $model =new  \Think\Model('user');
        $model = M('User');
        $data = $model->select();
        echo "<pre>";
        print_r($data);
        echo "<pre>";
        print_r($model);
    }

    public function sqls(){
        header("Content-type: text/html;charset=utf-8");
        //实例化数据库
        $model = M();
        //删除语句
//        $sql = "delete from user where id=2";
        //添加语句
//        $sql = "insert into  user values(null,'1','2','3','4')";
//        修改语句
//        $sql="update user set name='我的最爱' where id>9";
//        查询语句
        $sql = "select * from user";

        $data = $model->query($sql);
        echo $model->execute($sql);
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }

//    执行连贯操作
    public function lian(){
//        实例化空的数据模型
        $model=M();
//        实例化数据库   查询数据
//        $data = $model->field('*')->table('user')->select();
//        $data = $model->field('name,pass')->table('user')->select();
//        $data = $model->field(array('pass','name','time'))->table('user')->select();
//        $data = $model->field(array('pass','name','concat(name,pass)'))->table('user')->select();
//        $data = $model->field(array('pass','name','concat(name,pass) as tt'))->table('user')->select();
//        $data = $model->field("*")->where('id>2 and id<6')->table('user')->select();
//        $data = $model->field("*")->where('id in (2,4,5,6)')->table('user')->select();
//        $data = $model->field("*")->where('name="1" and pass="2"')->table('user')->select();
//        $data = $model->field("*")->where(array("name"=>'1','pass'=>'12345'))->table('user')->select();
//        $arr=array(
//            'id'=>array('gt',3),//id>3的数据
//        );
//        $data = $model->field("*")->where(array($arr))->table('user')->select();
//        $data = $model->field("*")->where('name like "%张%"')->table('user')->select();
//        $data = $model->field("*")->order('id')->table('user')->select();
//        $data = $model->field("*")->order('id')->page(4,1)->table('user')->select();
//        $data = $model->field("count(name),name")->group('name')->table('user')->select();
//        $data = $model->where('id>2 and id<10')->fetchSql(true)->table('user')->select();
//        $sql = "select student.name as sname,type.name tname from student,type where student.cid=type.id";
//        $model->field('student.name sname,type.name tname')->join('type on type.id=student.cid');
//        $data = $model->table('student')->field('student.name sname,type.name tname')->join('type on type.id=student.cid')->select();
//        $sql = "select student.name as sname,type.name tname from student left join type on student.cid=type.id";

//        $data = $model->query($sql);
        $data = $model->table('student')->field('student.name sname,type.name tname')->join('type on type.id=student.cid','left')->select();
//        获取执行的sql语句
        echo $model->getLastSql();
//        echo $model->getLastInsID();
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}