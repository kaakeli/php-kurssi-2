<?php
class Calculator{
    public array $numbers;
    public function addNumber(int $number)
    {
        $this->numbers[] = $number;
        return $this;
    }
    public function calculate()
    {
        $total = 0;
        foreach ($this->$numbers as $number) {
            $total = $total + $number;
            return $total;
        }
    }
}
$calculator = new Calculator();
$calculator->addNumber(5)->addNumber(7)
            ->addNumber(12)->addNumber(8)->calculate();
            
?>