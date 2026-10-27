<?php

namespace CloudPDF\Shares\Types;

enum SharesUpdateRequestLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
