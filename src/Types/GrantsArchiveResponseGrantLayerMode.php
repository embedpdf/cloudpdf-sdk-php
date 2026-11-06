<?php

namespace CloudPDF\Types;

enum GrantsArchiveResponseGrantLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
