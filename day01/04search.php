<?php
    //请求方式: 接受的url地址栏传递的参数
    //get请求: 定义接受的变量 wd
    //网络请求: http请求 get/post
    //post请求: 一班传递数据from
    //put请求: 修改修改
    //deleta请求: 删除某个请求
    $code=$_GET['wd'];
    if($code){
        echo '查询的内容很多很多----'.$code;

    }


?>