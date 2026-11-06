<?php

namespace CloudPDF\Types;

enum DocVersionsListResponseVersionsItemProducer: string
{
    case Upload = "upload";
    case Signature = "signature";
}
