<?php

namespace CloudPDF\Types;

enum RichTextDocumentInputBodyDecorationItem: string
{
    case Underline = "underline";
    case LineThrough = "line-through";
    case Word = "word";
}
