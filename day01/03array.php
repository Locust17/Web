<?php 
    //1.定义数组
    $arr = [10,20,30,'hello',true];
    //echo 数据简单的数据类型
    #echo $arr[0];
    #echo $arr[-1];
    
    //var_dump(变量) 数据类型
    //print_r(数组) 数组的输出方式

    var_dump($arr);   #位置 + 类别 + 内容
    echo '<hr/>';          #横线分割
    print_r($arr);    #输出数组
    //注意: php里面的数组和js里面不一样

    //2. $arr = array(key=>value,...)
    $arr2 = array('unname' => 'huahua','age' => 20,'sex' => 'nan');
    print_r($arr2);
    echo $arr2['sex'];
    echo '<hr/>';

    //3.$arr=[key=>value,...]
    $arr3 = ['yuwen'=>90,'yingyu'=>60];
    print_r($arr3);
    echo 'hr/';

    #4.遍历数组 foreach
    //语法：foreach(数组名字 as 每一项内容){}
    foreach ($arr2 as $item){
        echo $item;
    }
    
    echo 'hr/';

    //语法2: foreach(数组名字 as $key=>$value){}
    //$key 键名 可以任意定义 $value数组的每一项值 任意定义
    foreach ($arr2 as $key=>$value){
        echo $key.':'.$value.'br/';
    }
?>