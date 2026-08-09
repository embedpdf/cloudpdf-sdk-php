<?php

namespace CloudPDF\Documents\Types;

enum DocumentsInitRequestDedupMode: string
{
    case AlwaysCreate = "always-create";
    case ReuseExisting = "reuse-existing";
}
