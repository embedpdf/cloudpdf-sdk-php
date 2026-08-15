<?php

namespace CloudPDF\Types;

enum TenantsGet200ResponseTenantStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
}
