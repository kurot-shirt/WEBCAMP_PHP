<?php

class BasicClass
{
    public $var;

    public function getVar() {
        return $this->var;
    }
}
$a = new BasicClass();
$a->var = 'apple';

$b = new BasicClass();
$b->var = 'banana';

echo $a->getVar();
echo $b->getVar();