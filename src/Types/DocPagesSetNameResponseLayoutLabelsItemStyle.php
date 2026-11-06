<?php

namespace CloudPDF\Types;

enum DocPagesSetNameResponseLayoutLabelsItemStyle: string
{
    case Decimal = "decimal";
    case UpperRoman = "upperRoman";
    case LowerRoman = "lowerRoman";
    case UpperLetters = "upperLetters";
    case LowerLetters = "lowerLetters";
}
