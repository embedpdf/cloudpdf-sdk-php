<?php

namespace CloudPDF\Types;

enum PdfLinkTargetWritableNamedName: string
{
    case NextPage = "NextPage";
    case PrevPage = "PrevPage";
    case FirstPage = "FirstPage";
    case LastPage = "LastPage";
}
