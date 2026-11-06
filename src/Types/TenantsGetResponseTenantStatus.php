<?php

namespace CloudPDF\Types;

enum TenantsGetResponseTenantStatus: string
{
    case Active = "active";
    case Suspended = "suspended";
}
