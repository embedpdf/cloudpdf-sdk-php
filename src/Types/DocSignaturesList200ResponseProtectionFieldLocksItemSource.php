<?php

namespace CloudPDF\Types;

enum DocSignaturesList200ResponseProtectionFieldLocksItemSource: string
{
    case Fieldmdp = "fieldmdp";
    case Lock = "lock";
}
