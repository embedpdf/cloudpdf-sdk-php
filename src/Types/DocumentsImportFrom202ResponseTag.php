<?php

namespace CloudPDF\Types;

enum DocumentsImportFrom202ResponseTag: string
{
    case Imported = "imported";
    case Deduped = "deduped";
    case Accepted = "accepted";
}
