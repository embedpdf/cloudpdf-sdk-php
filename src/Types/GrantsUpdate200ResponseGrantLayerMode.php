<?php

namespace CloudPDF\Types;

enum GrantsUpdate200ResponseGrantLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
