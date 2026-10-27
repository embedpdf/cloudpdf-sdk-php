<?php

namespace CloudPDF\Shares\Types;

enum SharesUpdateRequestVisitorIdentityFieldsTitle: string
{
    case Required = "required";
    case Optional = "optional";
}
