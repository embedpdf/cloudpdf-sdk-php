<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysisResponseBasisSource: string
{
    case Persisted = "persisted";
    case WorkingCopy = "working-copy";
}
