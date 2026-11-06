<?php

namespace CloudPDF\Types;

enum GrantsArchiveResponseGrantVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
