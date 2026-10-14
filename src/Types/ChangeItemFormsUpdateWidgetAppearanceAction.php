<?php

namespace CloudPDF\Types;

enum ChangeItemFormsUpdateWidgetAppearanceAction: string
{
    case Preserved = "preserved";
    case Regenerated = "regenerated";
    case GenerationUnavailable = "generation-unavailable";
    case Restored = "restored";
}
