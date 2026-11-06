<?php

namespace CloudPDF\Types;

enum GrantsListResponseGrantsItemLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
