<?php

namespace CloudPDF\Types;

enum DocVersionsAnalysis200ResponseMode: string
{
    case Authoritative = "authoritative";
    case Exploratory = "exploratory";
}
