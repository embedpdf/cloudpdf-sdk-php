<?php

namespace CloudPDF\Types;

enum GrantsGetResponseGrantVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
