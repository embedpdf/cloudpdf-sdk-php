<?php

namespace CloudPDF\Types;

enum SharesUpdate200ResponseShareVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
