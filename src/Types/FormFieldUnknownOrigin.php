<?php

namespace CloudPDF\Types;

enum FormFieldUnknownOrigin: string
{
    case Acroform = "acroform";
    case Recovered = "recovered";
}
