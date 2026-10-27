<?php

namespace CloudPDF\Shares\Types;

enum SharesCreateRequestVisitorIdentityFieldsTitle: string
{
    case Required = "required";
    case Optional = "optional";
}
