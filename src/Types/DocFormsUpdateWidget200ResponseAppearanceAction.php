<?php

namespace CloudPDF\Types;

enum DocFormsUpdateWidget200ResponseAppearanceAction: string
{
    case Preserved = "preserved";
    case Regenerated = "regenerated";
    case GenerationUnavailable = "generation-unavailable";
    case Restored = "restored";
}
