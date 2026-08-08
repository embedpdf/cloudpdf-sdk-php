<?php

namespace Cloudpdf\Types;

enum DocHead200ResponsePermissionsOpenedAs: string
{
    case None = "none";
    case User = "user";
    case Owner = "owner";
}
