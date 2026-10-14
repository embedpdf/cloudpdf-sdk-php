<?php

namespace CloudPDF\Types;

enum FormFieldComboboxOrigin: string
{
    case Acroform = "acroform";
    case Recovered = "recovered";
}
