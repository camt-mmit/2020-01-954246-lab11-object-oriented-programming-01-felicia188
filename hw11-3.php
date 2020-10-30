<?php
// 602110188 chen shuo
$y=null;
$number=null;
$result = null;
$menu=null;

// php hw11-3.php 
class multiplication{  //构建乘法口诀的类
    private $number; //列-1
    private $result;//输出的结果，有没有无所谓
    function __construct( $number)//为类的对象赋值
    {
        $this->column= $number;
        $this->result= $result=null;
    }
     
    function multi($number)//乘法函数
    {
        for($j=1;$j<=15;$j++) /*控制行*/
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

$pricings[0]=array('unit'=>0,'price'=>0,'isWhole'=>1);
$pricings[1]=array('unit'=>10,'price'=>10,'isWhole'=>1);
$pricings[2]=array('unit'=>15,'price'=>3,'isWhole'=>0);
$pricings[3]=array('unit'=>20,'price'=>5,'isWhole'=>0);
$pricings[4]=array('unit'=>30,'price'=>10,'isWhole'=>0);
$pricings[5]=array('unit'=>999999,'price'=>20,'isWhole'=>0);

class calculatePrice
{
    private $unit;
    private $unitCal=0;
    private $price=0;

    function __construct($unit)
    {
        $this->unit = $unit;
        $this->unitCal = $unitCal=null;
        $this->price = $price=null;
    }
    function price($pricings,$unit)
    {
        for($i = 0; $unit > 0; $i++) {
        $this->unitCal = ($unit > $pricings[$i]['unit'])? $pricings[$i]['unit'] : $unit;//输入的用电量是否大于文件的用电量，是 $unitCal=价格，否$unitCal=输入用电量
        $this->price += ($pricings[$i]['isWhole']=1)? $pricings[$i]['price'] : $this->unitCal * $pricings[$i]['price'];//判断价格是否为总价格，是的话 price=价格+price（第一轮循环价格是零，）否的话，price=untical*价格+price
		$unit -= $this->unitCal;//$unit=$unit-$unitCal 输入的用电量=输入的用电量-文件的用电量
        }
        
        printf("Price of electricity bill = %d ",$this->price);
        echo"\n";
        return $this->price;
    }
}
print("1. Multiplication Table\n");
print("2. Electricity Bill calculation\n");
print("3. exit\n");

$class= new multiplication($y, $number);
while($menu!=3) {
    $menu = null;
    printf("Input menu number:  ");
    fscanf(STDIN, "%d", $menu);
    if($menu==2){
        printf("Input usage unit:  ");
        fscanf(STDIN, "%d", $unit);
        $calculatePrice = new calculatePrice($pricings,$unit);
        $calculatePrice->price($pricings,$unit);
    }
    if($menu==1){
        printf("Input size:  ");
        fscanf(STDIN, "%d", $number);
        $class->multi($number);
    }
    if($menu!=1&&$menu!=2&&$menu!=3){
        printf("Invalid menu number 5!!! \n");
    }
    
}
