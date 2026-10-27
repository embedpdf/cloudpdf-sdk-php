<?php

namespace CloudPDF\Shares\Types;

enum SharesUpdateRequestVisitorIdentityFieldsOrganization: string
{
    case Required = "required";
    case Optional = "optional";
}
