<?php

namespace CloudPDF\Types;

enum GrantsCreate200ResponseGrantLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
