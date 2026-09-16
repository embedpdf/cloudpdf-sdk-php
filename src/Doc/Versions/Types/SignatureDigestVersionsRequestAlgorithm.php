<?php

namespace CloudPDF\Doc\Versions\Types;

enum SignatureDigestVersionsRequestAlgorithm: string
{
    case Sha1 = "sha1";
    case Sha256 = "sha256";
    case Sha384 = "sha384";
    case Sha512 = "sha512";
}
