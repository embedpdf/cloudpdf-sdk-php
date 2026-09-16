<?php

namespace CloudPDF\Types;

enum DocSignaturesComplete200ResponseProtectionFieldLocksItemSource: string
{
    case Fieldmdp = "fieldmdp";
    case Lock = "lock";
}
