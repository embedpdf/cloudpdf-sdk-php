<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysis200ResponseBasisSource: string
{
    case Persisted = "persisted";
    case WorkingCopy = "working-copy";
}
