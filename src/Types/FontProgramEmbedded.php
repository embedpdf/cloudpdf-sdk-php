<?php

namespace CloudPDF\Types;

enum FontProgramEmbedded: string
{
    case Whole = "whole";
    case Subset = "subset";
    case None = "none";
}
