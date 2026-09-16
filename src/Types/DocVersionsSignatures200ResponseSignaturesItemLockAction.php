<?php

namespace CloudPDF\Types;

enum DocVersionsSignatures200ResponseSignaturesItemLockAction: string
{
    case All = "all";
    case Include_ = "include";
    case Exclude = "exclude";
}
