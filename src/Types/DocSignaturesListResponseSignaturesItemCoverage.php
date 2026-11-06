<?php

namespace CloudPDF\Types;

enum DocSignaturesListResponseSignaturesItemCoverage: string
{
    case WholeRevision = "whole-revision";
    case Partial = "partial";
    case Malformed = "malformed";
}
