<?php

namespace CloudPDF\Types;

enum TenantsUpdate200ResponseTenantStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
}
