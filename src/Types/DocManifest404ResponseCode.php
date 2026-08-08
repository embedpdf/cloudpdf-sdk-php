<?php

namespace Cloudpdf\Types;

enum DocManifest404ResponseCode: string
{
    case Unknown = "Unknown";
    case InvalidArg = "InvalidArg";
    case DocNotOpen = "DocNotOpen";
    case DocOpenFailed = "DocOpenFailed";
    case DocPasswordRequired = "DocPasswordRequired";
    case DocPasswordIncorrect = "DocPasswordIncorrect";
    case Aborted = "Aborted";
    case Network = "Network";
    case Unauthenticated = "Unauthenticated";
    case Forbidden = "Forbidden";
    case NotFound = "NotFound";
    case WireFormat = "WireFormat";
    case RuntimeUnavailable = "RuntimeUnavailable";
    case InvalidReference = "InvalidReference";
    case WeakAnnotationSessionConflict = "WeakAnnotationSessionConflict";
    case LayerVersionConflict = "LayerVersionConflict";
    case NotImplemented = "NotImplemented";
    case MalformedPdf = "MalformedPdf";
}
