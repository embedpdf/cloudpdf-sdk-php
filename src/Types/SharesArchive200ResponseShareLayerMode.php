<?php

namespace CloudPDF\Types;

enum SharesArchive200ResponseShareLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
