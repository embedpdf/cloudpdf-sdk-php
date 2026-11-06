<?php

namespace CloudPDF\Types;

enum DocSignaturesAnalysisResponseMode: string
{
    case Authoritative = "authoritative";
    case Exploratory = "exploratory";
}
