<?php

namespace CloudPDF\Types;

enum DocSignaturesComplete200ResponseSignatureLockAction: string
{
    case All = "all";
    case Include_ = "include";
    case Exclude = "exclude";
}
