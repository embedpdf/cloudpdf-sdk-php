<?php

namespace CloudPDF\Grants\Types;

enum GrantsUpdateRequestVisitorIdentityFieldsTitle: string
{
    case Required = "required";
    case Optional = "optional";
}
