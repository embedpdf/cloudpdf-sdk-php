<?php

namespace CloudPDF\Types;

enum DocumentMetadataTrapped: string
{
    case True = "true";
    case False = "false";
    case Unknown = "unknown";
}
