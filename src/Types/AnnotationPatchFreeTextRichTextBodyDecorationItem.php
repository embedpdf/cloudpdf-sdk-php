<?php

namespace CloudPDF\Types;

enum AnnotationPatchFreeTextRichTextBodyDecorationItem: string
{
    case Underline = "underline";
    case LineThrough = "line-through";
    case Word = "word";
}
