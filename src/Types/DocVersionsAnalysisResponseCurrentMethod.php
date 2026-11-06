<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysisResponseCurrentMethod: string
{
    case NetState = "net-state";
    case NetStateReplay = "net-state+replay";
}
