<?php

namespace CloudPDF\Types;

enum TenantsCreate200ResponseTenantStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
}
