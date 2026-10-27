<?php

namespace CloudPDF\Shares\Types;

enum SharesUpdateRequestVisitorIdentityFieldsOrganizationalUnit: string
{
    case Required = "required";
    case Optional = "optional";
}
