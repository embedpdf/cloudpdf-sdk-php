<?php

namespace CloudPDF\Shares\Types;

enum SharesCreateRequestVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
