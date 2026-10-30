<?php

namespace CloudPDF\Types;

enum GrantsArchive200ResponseGrantLayerMode: string
{
    case Shared = "shared";
    case PerVisitor = "per-visitor";
}
