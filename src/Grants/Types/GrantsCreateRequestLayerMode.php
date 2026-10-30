<?php

namespace CloudPDF\Grants\Types;

enum GrantsCreateRequestLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
