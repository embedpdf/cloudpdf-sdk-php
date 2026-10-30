<?php

namespace CloudPDF\Grants\Types;

enum GrantsCreateRequestVisitorIdentityFieldsDisplayName: string
{
    case Required = "required";
    case Optional = "optional";
}
