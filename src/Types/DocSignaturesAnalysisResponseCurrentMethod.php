<?php

namespace CloudPDF\Types;

enum DocSignaturesAnalysisResponseCurrentMethod: string
{
    case NetState = "net-state";
    case NetStateReplay = "net-state+replay";
}
