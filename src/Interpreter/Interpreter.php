<?php

namespace Interpreter;

/**
 * Interpretes a rule.
 */
interface Interpreter
{
    /**
     * Parses the rule into an equivalent AST.
     *
     * @param string $rule The rule represented as a string.
     *
     * @return \Hoa\Ruler\Model
     */
    function interpret($rule);
}
