<?php
//php hw11-2.php ass-02-input.txt
// 602110188 chen shuo
$fp = fopen($_SERVER['argv'][1], 'r');
fscanf($fp, "%d", $n);//%d 整数，第二行第一个数被读取为n
for($i = 0; $i < $n; $i++) {//n行数据，n次循环
    fscanf($fp, "%d %d %d", $pricing['unit'], $pricing['price'], $pricing['isWhole']);//顺序读取信息
    $pricings[] = $pricing;
}


class calculatePrice
{
    private $unit;
    private $unitCal=0;
    private $price=0;

    function __construct($unit)
    {
        $this->unit = $unit;
        $this->unitCal = $unitCal;
        $this->price = $price;
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
while($unit!=-1) {
    $unit = null;
    printf("Input usage unit(-1 for exit): ");
    fscanf(STDIN, "%d", $unit);
    $calculatePrice = new calculatePrice($pricings,$unit);
    $calculatePrice->price($pricings,$unit);
}


