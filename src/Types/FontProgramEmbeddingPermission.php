<?php

namespace CloudPDF\Types;

enum FontProgramEmbeddingPermission: string
{
    case Installable = "installable";
    case Editable = "editable";
    case PreviewAndPrint = "preview-and-print";
}
