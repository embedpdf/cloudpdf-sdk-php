<?php

namespace CloudPDF\Documents\Types;

enum DocumentsImportFromRequestMode: string
{
    case Sync = "sync";
    case Async = "async";
}
