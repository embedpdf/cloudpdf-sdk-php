<?php

namespace CloudPDF\Types;

enum DocumentsImportFrom200ResponseStatus: string
{
    case Imported = "imported";
    case Deduped = "deduped";
    case Accepted = "accepted";
}
