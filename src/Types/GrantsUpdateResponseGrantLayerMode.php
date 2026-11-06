<?php

namespace CloudPDF\Types;

enum GrantsUpdateResponseGrantLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
