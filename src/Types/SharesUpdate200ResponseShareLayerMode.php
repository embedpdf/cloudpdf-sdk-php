<?php

namespace CloudPDF\Types;

enum SharesUpdate200ResponseShareLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
