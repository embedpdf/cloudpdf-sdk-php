<?php

namespace CloudPDF\Types;

enum AnnotationDraftFreeTextIntent: string
{
    case FreeText = "free-text";
    case FreeTextCallout = "free-text-callout";
}
