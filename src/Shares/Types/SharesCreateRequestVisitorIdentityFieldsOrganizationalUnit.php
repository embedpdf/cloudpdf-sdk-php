<?php

namespace CloudPDF\Shares\Types;

enum SharesCreateRequestVisitorIdentityFieldsOrganizationalUnit: string
{
    case Required = "required";
    case Optional = "optional";
}
