<?php

namespace CloudPDF\Types;

enum ChangeOpFormsSetDisplayDisplay: string
{
    case Visible = "visible";
    case Hidden = "hidden";
    case NoPrint = "noPrint";
    case NoView = "noView";
}
