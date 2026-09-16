<?php

namespace CloudPDF\Types;

enum DocSignaturesList200ResponseSignaturesItemCoverage: string
{
    case WholeRevision = "whole-revision";
    case Partial = "partial";
    case Malformed = "malformed";
}
