<?php

namespace CloudPDF\Types;

enum DocSignaturesAnalysis200ResponseMode: string
{
    case Authoritative = "authoritative";
    case Exploratory = "exploratory";
}
