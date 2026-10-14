<?php

namespace CloudPDF\Types;

enum FormFieldTextOrigin: string
{
    case Acroform = "acroform";
    case Recovered = "recovered";
}
