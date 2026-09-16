<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysis200ResponseCurrentMethod: string
{
    case NetState = "net-state";
    case NetStateReplay = "net-state+replay";
}
