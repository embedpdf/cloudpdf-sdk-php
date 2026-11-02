<?php

namespace CloudPDF\Types;

enum ChangeItemPagesRestoreLayoutLabelsItemStyle: string
{
    case Decimal = "decimal";
    case UpperRoman = "upperRoman";
    case LowerRoman = "lowerRoman";
    case UpperLetters = "upperLetters";
    case LowerLetters = "lowerLetters";
}
