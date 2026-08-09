<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemTextIcon: string
{
    case Comment = "comment";
    case Key = "key";
    case Note = "note";
    case Help = "help";
    case NewParagraph = "new-paragraph";
    case Paragraph = "paragraph";
    case Insert = "insert";
}
