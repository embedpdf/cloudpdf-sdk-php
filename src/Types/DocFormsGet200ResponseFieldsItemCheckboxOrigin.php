<?php

namespace CloudPDF\Types;

enum DocFormsGet200ResponseFieldsItemCheckboxOrigin: string
{
    case Acroform = "acroform";
    case Recovered = "recovered";
}
