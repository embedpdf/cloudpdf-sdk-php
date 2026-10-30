<?php

namespace CloudPDF\Grants\Types;

enum GrantsCreateRequestVisitorIdentityFieldsTitle: string
{
    case Required = "required";
    case Optional = "optional";
}
