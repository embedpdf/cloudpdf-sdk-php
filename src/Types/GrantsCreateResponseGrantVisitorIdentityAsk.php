<?php

namespace CloudPDF\Types;

enum GrantsCreateResponseGrantVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
