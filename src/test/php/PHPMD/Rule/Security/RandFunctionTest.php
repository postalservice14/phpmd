<?php

namespace PHPMD\Rule\Security;

use PHPMD\AbstractTest;

class RandFunctionTest extends AbstractTest
{
    public function testRuleAppliesToCodeWithRandFunction()
    {
        $rule = new RandFunction();
        $rule->setReport($this->getReportMock(2));
        $rule->apply($this->getMethod());
    }
}
