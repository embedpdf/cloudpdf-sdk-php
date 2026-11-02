<?php

namespace CloudPDF\Types;

enum FontSource: string
{
    case Standard = "standard";
    case Engine = "engine";
    case Document = "document";
}
