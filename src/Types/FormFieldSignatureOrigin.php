<?php

namespace CloudPDF\Types;

enum FormFieldSignatureOrigin: string
{
    case Acroform = "acroform";
    case Recovered = "recovered";
}
