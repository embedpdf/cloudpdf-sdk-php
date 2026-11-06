<?php

namespace CloudPDF\Types;

enum DocumentsImportFrom202ResponseStatus: string
{
    case Imported = "imported";
    case Deduped = "deduped";
    case Accepted = "accepted";
}
