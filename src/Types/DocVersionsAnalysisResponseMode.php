<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysisResponseMode: string
{
    case Authoritative = "authoritative";
    case Exploratory = "exploratory";
}
