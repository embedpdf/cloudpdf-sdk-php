<?php

namespace CloudPDF\Types;

enum SharesCreate200ResponseShareVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
