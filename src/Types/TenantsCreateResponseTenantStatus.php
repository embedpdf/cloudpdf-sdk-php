<?php

namespace CloudPDF\Types;

enum TenantsCreateResponseTenantStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
}
