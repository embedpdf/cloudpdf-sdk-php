<?php

namespace CloudPDF\Types;

enum DocSignaturesList200ResponseSignaturesItemLockAction: string
{
    case All = "all";
    case Include_ = "include";
    case Exclude = "exclude";
}
