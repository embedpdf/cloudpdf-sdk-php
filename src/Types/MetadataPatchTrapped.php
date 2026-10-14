<?php

namespace CloudPDF\Types;

enum MetadataPatchTrapped: string
{
    case True = "true";
    case False = "false";
    case Unknown = "unknown";
}
