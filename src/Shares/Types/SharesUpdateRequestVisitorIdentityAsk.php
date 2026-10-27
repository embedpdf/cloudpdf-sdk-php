<?php

namespace CloudPDF\Shares\Types;

enum SharesUpdateRequestVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
