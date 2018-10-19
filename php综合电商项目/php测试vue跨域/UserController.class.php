<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

    public function __construct()
    {
         parent::__construct();
            header("Access-Control-Allow-Origin:http://localhost:8080");  
          // 允许带cookie
           header('Access-Control-Allow-Credentials: true');
           //允许响应头类型
          header("Access-Control-Allow-Headers:X-Requested-With, accept, content-type");
           //允许响应类型，
      header("Access-Control-Allow-Methods:GET,HEAD,POST,PUT,DELETE,TRACE,OPTIONS,PATCH");
    }
    // 下面这个是测试 vue接口的
       public function ajaxAdd()
    {
        
              echo json_encode(array(
				'code' => 1,
				'mes' =>'登录已过期'
			));
       
 
    }
      public function ajaxAdd2()
    {
        
              echo json_encode(array(
				'code' => 1,
				'mes' =>'登录已过期'
			));
       
 
    }
}

