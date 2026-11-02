<?php

namespace CloudPDF\Types;

enum FontProgramInfoEmbedded: string
{
    case Whole = "whole";
    case Subset = "subset";
    case None = "none";
}
