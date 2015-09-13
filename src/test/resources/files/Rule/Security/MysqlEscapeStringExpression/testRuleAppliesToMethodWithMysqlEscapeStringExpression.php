<?php

class Foo
{
    public function testRuleAppliesToMethodWithMysqlEscapeStringExpression()
    {
        $data = 'foo';
        $escapedString = mysql_escape_string($data);

        return $escapedString;
    }
}
