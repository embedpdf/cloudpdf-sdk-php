<?php

namespace CloudPDF\Types;

enum DocSignaturesList200ResponseSignaturesItemFieldMdpAction: string
{
    case All = "all";
    case Include_ = "include";
    case Exclude = "exclude";
}
