<?php

namespace CloudPDF\Types;

enum TenantsList200ResponseTenantsItemStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
}
