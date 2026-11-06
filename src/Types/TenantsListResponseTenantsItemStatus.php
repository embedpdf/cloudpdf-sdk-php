<?php

namespace CloudPDF\Types;

enum TenantsListResponseTenantsItemStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
}
