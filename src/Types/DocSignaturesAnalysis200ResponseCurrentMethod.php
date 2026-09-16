<?php

namespace CloudPDF\Types;

enum DocSignaturesAnalysis200ResponseCurrentMethod: string
{
    case NetState = "net-state";
    case NetStateReplay = "net-state+replay";
}
