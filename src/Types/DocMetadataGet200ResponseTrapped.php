<?php

namespace Cloudpdf\Types;

enum DocMetadataGet200ResponseTrapped: string
{
    case True = "true";
    case False = "false";
    case Unknown = "unknown";
}
