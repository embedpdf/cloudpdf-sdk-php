<?php

namespace CloudPDF\Types;

enum DocSignaturesAnalysisResponseBasisSource: string
{
    case Persisted = "persisted";
    case WorkingCopy = "working-copy";
}
