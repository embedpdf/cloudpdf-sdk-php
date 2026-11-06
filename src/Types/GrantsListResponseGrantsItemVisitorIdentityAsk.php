<?php

namespace CloudPDF\Types;

enum GrantsListResponseGrantsItemVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
