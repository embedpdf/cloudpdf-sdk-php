<?php

namespace CloudPDF\Types;

enum DocumentsImportFrom200ResponseTag: string
{
    case Imported = "imported";
    case Deduped = "deduped";
    case Accepted = "accepted";
}
