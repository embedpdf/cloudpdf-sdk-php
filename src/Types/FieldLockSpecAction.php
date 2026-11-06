<?php

namespace CloudPDF\Types;

enum FieldLockSpecAction: string
{
    case All = "all";
    case Include_ = "include";
    case Exclude = "exclude";
}
