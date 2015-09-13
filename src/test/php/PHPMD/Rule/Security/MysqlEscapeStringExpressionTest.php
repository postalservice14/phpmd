<?php

namespace PHPMD\Rule\Security;

use PHPMD\AbstractTest;

class MysqlEscapeStringExpressionTest extends AbstractTest
{
    public function testRuleAppliesToMethodWithMysqlEscapeStringExpression()
    {
        $rule = new MysqlEscapeString();
        $rule->setReport($this->getReportMock(1));
        $rule->apply($this->getMethod());
    }
}
