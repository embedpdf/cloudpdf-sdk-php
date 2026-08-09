<?php

namespace CloudPDF\Types;

enum DocAnnotationsList200ResponseAnnotationsItemWidgetFontFamily: string
{
    case Courier = "courier";
    case CourierBold = "courier-bold";
    case CourierBoldOblique = "courier-bold-oblique";
    case CourierOblique = "courier-oblique";
    case Helvetica = "helvetica";
    case HelveticaBold = "helvetica-bold";
    case HelveticaBoldOblique = "helvetica-bold-oblique";
    case HelveticaOblique = "helvetica-oblique";
    case TimesRoman = "times-roman";
    case TimesBold = "times-bold";
    case TimesBoldItalic = "times-bold-italic";
    case TimesItalic = "times-italic";
    case Symbol = "symbol";
    case ZapfDingbats = "zapf-dingbats";
}
