<?php

namespace CloudPDF\Types;

enum PdfActionNodeSubmitFormPayloadFlagsMethod: string
{
    case Post = "post";
    case Get = "get";
}
