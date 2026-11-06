<?php

namespace CloudPDF\Types;

enum TenantsUpdateResponseTenantStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
}
