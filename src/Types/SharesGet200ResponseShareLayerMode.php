<?php

namespace CloudPDF\Types;

enum SharesGet200ResponseShareLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
