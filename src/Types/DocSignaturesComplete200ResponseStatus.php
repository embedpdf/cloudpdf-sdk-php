<?php

namespace CloudPDF\Types;

enum DocSignaturesComplete200ResponseStatus: string
{
    case Completed = "completed";
    case AlreadyCompleted = "already-completed";
}
