<?php

namespace CloudPDF\Types;

enum DocSignaturesListResponseProtectionFieldLocksItemSource: string
{
    case Fieldmdp = "fieldmdp";
    case Lock = "lock";
}
