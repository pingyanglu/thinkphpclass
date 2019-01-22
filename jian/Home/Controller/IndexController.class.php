<?php
namespace Home\Controller;
header('content-type:text/html;charset=utf-8;');
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }
    public function data1(){
        //连接数据库
        $model = M('user');
        //查询数据
        $data = $model->select();

        //var_dump($data);

        //分配数据
        $this->assign('data',$data);
        //展示数据
        $this->display();
    }
    public function yzm(){
        $Verify = new \Think\Verify();
        $Verify->entry();
    }
    public function getConf(){
        C('XIAOJIAN','大炮');
        echo C('XIAOJIAN');
    }
    public function urls(){
        echo U('index')."<hr>";
    }
    public function getfunc(){
        app_func();
        echo "<hr>";
        home_func();
        echo "<hr>";
        sys_func();
    }
    public function cdx(){
        $this->redirect('Index/index', array('cate_id' => 2), 5, '页面跳转中...');
    }
    public function getCs(){
        echo $_GET['id'];
        echo I('get.id');
        echo I('get.name');
        echo I('get.sex','0');
        $arr = I('get.');
        echo "<pre>";
        print_r($arr);
        echo "<pre>";

        $arr1=I('path.');
        echo '<pre>';
        print_r($arr1);
        echo '<pre>';
    }
    public function add(){
        if(IS_POST){
            echo '提交页面';
        }else{
            $this->display();
        }

    }
    public function _empty(){
        $this->redirect('Index/index');
    }

    public function a(){
        echo "AAAAC";
    }

    public function b(){
        $this->a();
        self::a();
        IndexController::a();
        echo "BBBB";
    }

    public function kuaqi(){
        $model = new \Home\Controller\JianController();
//        $model = new JianController();
        $model->getUrl();
        JianController::getUrl();
        \Home\Controller\JianController::getUrl();
    }

    public function kuamo(){
        $model = new \Admin\Controller\IndexController();
        $model->index();
        \Admin\Controller\IndexController::index();
    }

    public function kua(){
        //跨控制器  Jian控制器的getUrl方法
        $model = A('Jian');
        // $model = new \Home\Controller\JianController();
        $model->getUrl();
        //跨模块  后台Admin模块的index方法
        $model = A('Admin/index');
        $model = new \Admin\Controller\IndexController();
        $model->index();
    }
}