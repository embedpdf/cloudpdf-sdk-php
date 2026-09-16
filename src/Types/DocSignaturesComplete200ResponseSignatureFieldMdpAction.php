<?php

namespace CloudPDF\Types;

enum DocSignaturesComplete200ResponseSignatureFieldMdpAction: string
{
    case All = "all";
    case Include_ = "include";
    case Exclude = "exclude";
}
