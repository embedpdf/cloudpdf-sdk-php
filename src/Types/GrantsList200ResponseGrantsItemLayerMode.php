<?php

namespace CloudPDF\Types;

enum GrantsList200ResponseGrantsItemLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
