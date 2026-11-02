<?php

namespace CloudPDF\Types;

enum FontProgramInfoEmbeddingPermission: string
{
    case Installable = "installable";
    case Editable = "editable";
    case PreviewAndPrint = "preview-and-print";
}
