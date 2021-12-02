<?php

class Arithmetic
{
    private $a, $b, $opr;
    function __construct($a = "", $b = "", $opr = NULL)
    {
        $this->a = $a;
        $this->b = $b;
        $this->opr = $opr;
    }

    public function getAnswer()
    {
        $answer = '';
        switch ($this->opr) {
            case "+":
                $answer = $this->a + $this->b;
                break;
            case "-":
                $answer = $this->a - $this->b;
                break;
            case "*":
                $answer = $this->a * $this->b;
                break;
            case "/":
                if ($this->b != 0)
                    $answer = $this->a / $this->b;
                break;
            case "%":
                if ($this->b != 0)
                    $answer = $this->a % $this->b;
                break;
            default:
                break;
        }
        return $answer;
    }

    public function getA()
    {
        return $this->a;
    }
    public function getB()
    {
        return $this->b;
    }
}
