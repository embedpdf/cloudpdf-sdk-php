<?php

namespace CloudPDF\Types;

enum SharesExchange200ResponseLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
