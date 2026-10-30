<?php

namespace CloudPDF\Grants\Types;

enum GrantsUpdateRequestVisitorIdentityFieldsOrganizationalUnit: string
{
    case Required = "required";
    case Optional = "optional";
}
