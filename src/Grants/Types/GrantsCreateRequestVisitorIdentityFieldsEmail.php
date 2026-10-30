<?php

namespace CloudPDF\Grants\Types;

enum GrantsCreateRequestVisitorIdentityFieldsEmail: string
{
    case Required = "required";
    case Optional = "optional";
}
