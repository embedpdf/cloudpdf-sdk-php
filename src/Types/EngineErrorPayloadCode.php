<?php

namespace CloudPDF\Types;

enum EngineErrorPayloadCode: string
{
    case Unknown = "Unknown";
    case InvalidArg = "InvalidArg";
    case DocNotOpen = "DocNotOpen";
    case DocOpenFailed = "DocOpenFailed";
    case DocPasswordRequired = "DocPasswordRequired";
    case DocPasswordIncorrect = "DocPasswordIncorrect";
    case SharePasswordRequired = "SharePasswordRequired";
    case Aborted = "Aborted";
    case Network = "Network";
    case Unauthenticated = "Unauthenticated";
    case Forbidden = "Forbidden";
    case NotFound = "NotFound";
    case WireFormat = "WireFormat";
    case RuntimeUnavailable = "RuntimeUnavailable";
    case LayerVersionConflict = "LayerVersionConflict";
    case NotImplemented = "NotImplemented";
    case MalformedPdf = "MalformedPdf";
    case SigningPending = "SigningPending";
    case SigningExpired = "SigningExpired";
    case SigningVersionMismatch = "SigningVersionMismatch";
    case SignatureRefused = "SignatureRefused";
    case ProtectedDocument = "ProtectedDocument";
    case StaleBase = "StaleBase";
    case PayloadTooLarge = "PayloadTooLarge";
    case ObjectNumberUnavailable = "ObjectNumberUnavailable";
    case LayerFull = "LayerFull";
    case ChangeConflict = "ChangeConflict";
    case UndoUnavailable = "UndoUnavailable";
    case IdempotencyKeyReused = "IdempotencyKeyReused";
    case LayerDeleted = "LayerDeleted";
    case VisitorIdentityRequired = "VisitorIdentityRequired";
}
