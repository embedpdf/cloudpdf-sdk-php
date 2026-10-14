<?php

namespace CloudPDF\Types;

enum ChangeItemAnnotationsUpdateAppearanceAction: string
{
    case Preserved = "preserved";
    case Regenerated = "regenerated";
    case GenerationUnavailable = "generation-unavailable";
    case Restored = "restored";
}
