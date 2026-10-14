<?php

namespace CloudPDF\Types;

enum FormFieldRadioOrigin: string
{
    case Acroform = "acroform";
    case Recovered = "recovered";
}
