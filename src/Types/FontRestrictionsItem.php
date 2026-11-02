<?php

namespace CloudPDF\Types;

enum FontRestrictionsItem: string
{
    case Subset = "subset";
    case NotEmbedded = "not-embedded";
    case PreviewAndPrint = "preview-and-print";
    case UnsupportedFormat = "unsupported-format";
    case NoUnicodeMap = "no-unicode-map";
    case NotServed = "not-served";
}
