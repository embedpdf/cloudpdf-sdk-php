<?php

namespace CloudPDF\Types;

enum GrantsCreateResponseGrantLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
