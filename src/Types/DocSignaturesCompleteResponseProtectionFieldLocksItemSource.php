<?php

namespace CloudPDF\Types;

enum DocSignaturesCompleteResponseProtectionFieldLocksItemSource: string
{
    case Fieldmdp = "fieldmdp";
    case Lock = "lock";
}
