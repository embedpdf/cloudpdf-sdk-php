<?php

namespace CloudPDF\Types;

enum ModulePermissionLevel: string
{
    case Document = "document";
    case Tenant = "tenant";
}
