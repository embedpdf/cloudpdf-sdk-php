<?php

namespace CloudPDF\Types;

enum DocVersionsSignatures200ResponseProtectionFieldLocksItemSource: string
{
    case Fieldmdp = "fieldmdp";
    case Lock = "lock";
}
