<?php

namespace CloudPDF\Types;

enum PdfActionWriteSubmitFormMethod: string
{
    case Post = "post";
    case Get = "get";
}
