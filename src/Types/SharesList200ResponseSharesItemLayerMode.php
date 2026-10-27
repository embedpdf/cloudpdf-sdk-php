<?php

namespace CloudPDF\Types;

enum SharesList200ResponseSharesItemLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
