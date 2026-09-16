<?php

namespace CloudPDF\Types;

enum DocSignaturesComplete200ResponseSignatureCoverage: string
{
    case WholeRevision = "whole-revision";
    case Partial = "partial";
    case Malformed = "malformed";
}
