<?php

namespace CloudPDF\Types;

enum RichTextDocumentBodyDecorationItem: string
{
    case Underline = "underline";
    case LineThrough = "line-through";
    case Word = "word";
}
