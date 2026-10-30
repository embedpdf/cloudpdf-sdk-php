<?php

namespace CloudPDF\Grants\Types;

enum GrantsUpdateRequestVisitorIdentityFieldsEmail: string
{
    case Required = "required";
    case Optional = "optional";
}
