<?php

namespace Cloudpdf\Documents\Types;

enum DocumentsInitRequestDedupMode: string
{
    case AlwaysCreate = "always-create";
    case ReuseExisting = "reuse-existing";
}
