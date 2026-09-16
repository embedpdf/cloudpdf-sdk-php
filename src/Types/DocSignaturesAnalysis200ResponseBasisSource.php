<?php

namespace CloudPDF\Types;

enum DocSignaturesAnalysis200ResponseBasisSource: string
{
    case Persisted = "persisted";
    case WorkingCopy = "working-copy";
}
