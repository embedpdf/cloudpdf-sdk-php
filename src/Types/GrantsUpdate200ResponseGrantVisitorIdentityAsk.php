<?php

namespace CloudPDF\Types;

enum GrantsUpdate200ResponseGrantVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
