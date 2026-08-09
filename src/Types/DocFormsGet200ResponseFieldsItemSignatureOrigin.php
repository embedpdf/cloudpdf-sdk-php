<?php

namespace CloudPDF\Types;

enum DocFormsGet200ResponseFieldsItemSignatureOrigin: string
{
    case Acroform = "acroform";
    case Recovered = "recovered";
}
