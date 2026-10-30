<?php

namespace CloudPDF\Grants\Types;

enum GrantsUpdateRequestVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
