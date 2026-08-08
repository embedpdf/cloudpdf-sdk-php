<?php

namespace Cloudpdf\Types;

enum DocHead200ResponseAccessReasonsItem: string
{
    case Password = "password";
    case Cdn = "cdn";
    case PermissionsUnknown = "permissions-unknown";
}
