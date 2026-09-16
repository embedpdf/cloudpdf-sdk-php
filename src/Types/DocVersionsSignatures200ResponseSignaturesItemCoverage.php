<?php

namespace CloudPDF\Types;

enum DocVersionsSignatures200ResponseSignaturesItemCoverage: string
{
    case WholeRevision = "whole-revision";
    case Partial = "partial";
    case Malformed = "malformed";
}
