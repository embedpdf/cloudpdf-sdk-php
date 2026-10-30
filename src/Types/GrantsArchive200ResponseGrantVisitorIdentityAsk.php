<?php

namespace CloudPDF\Types;

enum GrantsArchive200ResponseGrantVisitorIdentityAsk: string
{
    case OnOpen = "on-open";
    case BeforeFirstChange = "before-first-change";
}
