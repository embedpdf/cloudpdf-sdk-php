<?php

namespace CloudPDF\Shares\Types;

enum SharesCreateRequestVisitorIdentityFieldsEmail: string
{
    case Required = "required";
    case Optional = "optional";
}
