<?php
// php hw11-1.php 3 
// 602110188 chen shuo
$y=substr($_SERVER['argv'][1], 0, );
class multiplication{  //构建乘法口诀的类
    private $y;//输入的行数
    private $number; //列-1
    private $result;//输出的结果，有没有无所谓
    function __construct($y, $number)//为类的对象赋值
    {
        $this->row = $y;
        $this->column= $number;
        $this->result= $result;
    }
     
    function multi($number)//乘法函数
    {
        for($j=1;$j<=$this->row;$j++) /*控制行*/
        {
           for($i=2;$i<=$number;$i++) /*控制列*/
           {
            $this->result=$j * $i;
            printf("%4d ",$this->result);
           }
           echo"\n";
        }   
        
    return  $this->result;
    }
}

$class= new multiplication($y, $number);
$number=1;//$number!=0
while($number!=0) {
    printf("Input size (0 for exit):  "); 
    fscanf(STDIN,"%d",$number);
    $class->multi($number);
}