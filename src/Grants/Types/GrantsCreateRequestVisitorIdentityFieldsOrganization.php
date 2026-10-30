<?php

namespace CloudPDF\Grants\Types;

enum GrantsCreateRequestVisitorIdentityFieldsOrganization: string
{
    case Required = "required";
    case Optional = "optional";
}
