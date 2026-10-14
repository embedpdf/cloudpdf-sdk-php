<?php

namespace CloudPDF\Types;

enum FormFieldListboxOrigin: string
{
    case Acroform = "acroform";
    case Recovered = "recovered";
}
