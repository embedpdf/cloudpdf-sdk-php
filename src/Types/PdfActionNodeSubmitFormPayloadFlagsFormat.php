<?php

namespace CloudPDF\Types;

enum PdfActionNodeSubmitFormPayloadFlagsFormat: string
{
    case Fdf = "fdf";
    case Html = "html";
    case Xfdf = "xfdf";
    case Pdf = "pdf";
}
