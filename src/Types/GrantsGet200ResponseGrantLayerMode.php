<?php

namespace CloudPDF\Types;

enum GrantsGet200ResponseGrantLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
