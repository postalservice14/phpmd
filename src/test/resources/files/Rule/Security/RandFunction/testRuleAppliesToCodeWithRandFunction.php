<?php

class Foo
{
    public function testRuleAppliesToCodeWithRandFunction()
    {
        $randomRange = rand(0, 1);
        $randomInt = rand(10);

        return array($randomRange, $randomInt);
    }
}
