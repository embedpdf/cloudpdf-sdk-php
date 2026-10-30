<?php

namespace CloudPDF\Grants\Types;

enum GrantsUpdateRequestVisitorIdentityFieldsDisplayName: string
{
    case Required = "required";
    case Optional = "optional";
}
