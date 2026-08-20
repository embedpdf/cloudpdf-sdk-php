<?php

namespace CloudPDF\Documents\Types;

enum DocumentsImportFromRequestDedupMode: string
{
    case AlwaysCreate = "always-create";
    case ReuseExisting = "reuse-existing";
}
