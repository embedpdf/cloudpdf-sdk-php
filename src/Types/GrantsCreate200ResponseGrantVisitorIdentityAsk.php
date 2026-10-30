<?php

namespace CloudPDF\Types;

enum GrantsCreate200ResponseGrantVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
