<?php

class DivideByZeroException
{
    public function __toString():string
    {
        return "can't divide by zero";
}
}