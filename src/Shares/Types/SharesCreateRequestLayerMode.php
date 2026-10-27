<?php

namespace CloudPDF\Shares\Types;

enum SharesCreateRequestLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
