<?php

namespace CloudPDF\Grants\Types;

enum GrantsCreateRequestVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
