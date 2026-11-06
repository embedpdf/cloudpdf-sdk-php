<?php

namespace CloudPDF\Types;

enum DocManifestResponseProtectionFieldLocksItemSource: string
{
    case Fieldmdp = "fieldmdp";
    case Lock = "lock";
}
