<?php

namespace CloudPDF\Types;

enum DocSignaturesPrepare200ResponseAlgorithm: string
{
    case Sha256 = "sha256";
    case Sha384 = "sha384";
    case Sha512 = "sha512";
}
