<?php
    #$str = 123;
    // $str = 'hello world';
    // echo $str;

    $str='hello';
    echo gettype($str);
    echo '<br/>';   #br/换行  hr横线

    $num = 100;
    echo gettype($num);
    echo '<br/>';
    
    $n = 10.2;
    echo gettype($n);
    echo '<hr/>';

    $flag = true;
    echo gettype($flag);
    echo '<hr/>';

    //字符串和js里面有什么不同:
    //1.js里面拼接 + 但是php用.  2.'' ""区别: ""解析变量 然后输出 '' 单引号直接输出内容
    $str = "hello world";
    echo $str;
    echo '$str';  #单引号是直接输出，双引号是解析内容再输出
    echo "$str";

    $eat = '今天中午吃什么？';
    $food = "吃烤羊肉";
    //echo "小明说:".$eat."我说:".$food;
    echo "小明说:$eat 我说: $food";  #""解析，空格隔开

?>