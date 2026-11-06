<?php

namespace CloudPDF\Types;

enum DocVersionsSignaturesResponseSignaturesItemCoverage: string
{
    case WholeRevision = "whole-revision";
    case Partial = "partial";
    case Malformed = "malformed";
}
