<?php

namespace CloudPDF\Types;

enum GrantsExchangeResponseLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
