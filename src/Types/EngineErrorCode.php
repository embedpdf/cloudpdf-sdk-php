<?php

namespace CloudPDF\Types;

enum EngineErrorCode: string
{
    case Unknown = "Unknown";
    case InvalidArg = "InvalidArg";
    case DocNotOpen = "DocNotOpen";
    case DocOpenFailed = "DocOpenFailed";
    case DocPasswordRequired = "DocPasswordRequired";
    case DocPasswordIncorrect = "DocPasswordIncorrect";
    case GrantPassphraseRequired = "GrantPassphraseRequired";
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
    case PayloadTooLarge = "PayloadTooLarge";
    case ObjectNumberUnavailable = "ObjectNumberUnavailable";
    case LayerFull = "LayerFull";
    case ChangeConflict = "ChangeConflict";
    case UndoUnavailable = "UndoUnavailable";
    case IdempotencyKeyReused = "IdempotencyKeyReused";
    case LayerDeleted = "LayerDeleted";
    case VisitorIdentityRequired = "VisitorIdentityRequired";
    case Conflict = "Conflict";
    case EngineBusy = "EngineBusy";
    case EngineRestarting = "EngineRestarting";
    case DocumentQuarantined = "DocumentQuarantined";
    case ThumbnailNotReady = "ThumbnailNotReady";
    case TooManyRequests = "TooManyRequests";
    case GrantExpired = "GrantExpired";
    case OriginRequired = "OriginRequired";
    case OriginNotAllowed = "OriginNotAllowed";
    case FeatureNotEnabled = "FeatureNotEnabled";
    case FeatureStopped = "FeatureStopped";
    case LicenseInvalid = "LicenseInvalid";
    case LicenseUsageLimit = "LicenseUsageLimit";
    case UpstreamError = "UpstreamError";
}
