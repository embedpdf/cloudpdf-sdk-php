<?php

namespace CloudPDF\Types;

enum GrantsExchange200ResponseLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
