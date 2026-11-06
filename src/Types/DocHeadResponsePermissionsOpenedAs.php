<?php

namespace CloudPDF\Types;

enum DocHeadResponsePermissionsOpenedAs: string
{
    case None = "none";
    case User = "user";
    case Owner = "owner";
}
