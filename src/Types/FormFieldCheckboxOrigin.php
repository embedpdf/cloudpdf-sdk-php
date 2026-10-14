<?php

namespace CloudPDF\Types;

enum FormFieldCheckboxOrigin: string
{
    case Acroform = "acroform";
    case Recovered = "recovered";
}
