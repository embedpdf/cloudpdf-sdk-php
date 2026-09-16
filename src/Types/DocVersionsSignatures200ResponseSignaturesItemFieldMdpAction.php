<?php

namespace CloudPDF\Types;

enum DocVersionsSignatures200ResponseSignaturesItemFieldMdpAction: string
{
    case All = "all";
    case Include_ = "include";
    case Exclude = "exclude";
}
