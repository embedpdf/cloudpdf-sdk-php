<?php

namespace CloudPDF\Types;

enum GrantsGetResponseGrantLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
