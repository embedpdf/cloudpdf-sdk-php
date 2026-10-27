<?php

namespace CloudPDF\Shares\Types;

enum SharesUpdateRequestVisitorIdentityFieldsEmail: string
{
    case Required = "required";
    case Optional = "optional";
}
