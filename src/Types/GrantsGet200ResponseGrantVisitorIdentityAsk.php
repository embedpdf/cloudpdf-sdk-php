<?php

namespace CloudPDF\Types;

enum GrantsGet200ResponseGrantVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
