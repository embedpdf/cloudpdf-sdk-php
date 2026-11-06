<?php

namespace CloudPDF\Types;

enum DocSignaturesCompleteResponseStatus: string
{
    case Completed = "completed";
    case AlreadyCompleted = "already-completed";
}
