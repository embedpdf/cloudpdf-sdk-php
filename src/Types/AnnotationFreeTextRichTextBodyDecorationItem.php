<?php

namespace CloudPDF\Types;

enum AnnotationFreeTextRichTextBodyDecorationItem: string
{
    case Underline = "underline";
    case LineThrough = "line-through";
    case Word = "word";
}
