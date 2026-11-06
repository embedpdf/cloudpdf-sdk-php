<?php

namespace CloudPDF\Types;

enum DocHeadResponseAccessReasonsItem: string
{
    case Password = "password";
    case Cdn = "cdn";
    case PermissionsUnknown = "permissions-unknown";
}
