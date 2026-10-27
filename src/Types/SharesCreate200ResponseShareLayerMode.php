<?php

namespace CloudPDF\Types;

enum SharesCreate200ResponseShareLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
