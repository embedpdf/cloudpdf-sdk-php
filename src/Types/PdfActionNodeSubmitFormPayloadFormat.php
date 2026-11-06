<?php

namespace CloudPDF\Types;

enum PdfActionNodeSubmitFormPayloadFormat: string
{
    case Fdf = "fdf";
    case Html = "html";
    case Xfdf = "xfdf";
    case Pdf = "pdf";
}
