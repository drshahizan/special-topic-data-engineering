<?php

namespace Psalm\Issue;

class MixedOperand extends CodeIssue implements MixedIssue
{
    public const ERROR_LEVEL = 1;
    public const SHORTCODE = 59;

    use MixedIssueTrait;
}
