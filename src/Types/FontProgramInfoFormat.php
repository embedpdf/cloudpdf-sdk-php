<?php

namespace CloudPDF\Types;

enum FontProgramInfoFormat: string
{
    case Truetype = "truetype";
    case Opentype = "opentype";
    case Cff = "cff";
    case Type1 = "type1";
    case Type3 = "type3";
}
