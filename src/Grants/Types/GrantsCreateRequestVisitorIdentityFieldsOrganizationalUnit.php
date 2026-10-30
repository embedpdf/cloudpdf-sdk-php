<?php

namespace CloudPDF\Grants\Types;

enum GrantsCreateRequestVisitorIdentityFieldsOrganizationalUnit: string
{
    case Required = "required";
    case Optional = "optional";
}
