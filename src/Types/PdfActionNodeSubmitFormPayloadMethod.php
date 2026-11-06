<?php

namespace CloudPDF\Types;

enum PdfActionNodeSubmitFormPayloadMethod: string
{
    case Post = "post";
    case Get = "get";
}
