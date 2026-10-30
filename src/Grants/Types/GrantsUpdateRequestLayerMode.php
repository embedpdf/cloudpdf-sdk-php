<?php

namespace CloudPDF\Grants\Types;

enum GrantsUpdateRequestLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
