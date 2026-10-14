<?php

namespace CloudPDF\Types;

enum DocAnnotationsUpdate200ResponseAppearanceAction: string
{
    case Preserved = "preserved";
    case Regenerated = "regenerated";
    case GenerationUnavailable = "generation-unavailable";
    case Restored = "restored";
}
