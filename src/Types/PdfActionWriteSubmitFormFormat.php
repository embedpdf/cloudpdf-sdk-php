<?php

namespace CloudPDF\Types;

enum PdfActionWriteSubmitFormFormat: string
{
    case Fdf = "fdf";
    case Html = "html";
    case Xfdf = "xfdf";
    case Pdf = "pdf";
}
