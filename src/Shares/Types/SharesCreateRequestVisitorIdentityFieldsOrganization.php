<?php

namespace CloudPDF\Shares\Types;

enum SharesCreateRequestVisitorIdentityFieldsOrganization: string
{
    case Required = "required";
    case Optional = "optional";
}
