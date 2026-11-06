<?php

namespace CloudPDF\Types;

enum DocSignaturesCompleteResponseSignatureCoverage: string
{
    case WholeRevision = "whole-revision";
    case Partial = "partial";
    case Malformed = "malformed";
}
