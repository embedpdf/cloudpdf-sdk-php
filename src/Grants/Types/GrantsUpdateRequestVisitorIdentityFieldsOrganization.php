<?php

namespace CloudPDF\Grants\Types;

enum GrantsUpdateRequestVisitorIdentityFieldsOrganization: string
{
    case Required = "required";
    case Optional = "optional";
}
