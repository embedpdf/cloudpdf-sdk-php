<?php

namespace CloudPDF\Types;

enum AnnotationFreeTextIntent: string
{
    case FreeText = "free-text";
    case FreeTextCallout = "free-text-callout";
    case FreeTextTypewriter = "free-text-typewriter";
}
