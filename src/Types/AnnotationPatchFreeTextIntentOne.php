<?php

namespace CloudPDF\Types;

enum AnnotationPatchFreeTextIntentOne: string
{
    case FreeText = "free-text";
    case FreeTextCallout = "free-text-callout";
    case FreeTextTypewriter = "free-text-typewriter";
}
