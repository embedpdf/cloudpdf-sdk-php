<?php

namespace CloudPDF\Types;

enum DocVersionsSignaturesResponseProtectionFieldLocksItemSource: string
{
    case Fieldmdp = "fieldmdp";
    case Lock = "lock";
}
