<?php

namespace CloudPDF\Types;

enum FormFieldPushbuttonOrigin: string
{
    case Acroform = "acroform";
    case Recovered = "recovered";
}
