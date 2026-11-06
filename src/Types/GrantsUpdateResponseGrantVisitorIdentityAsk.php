<?php

namespace CloudPDF\Types;

enum GrantsUpdateResponseGrantVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
