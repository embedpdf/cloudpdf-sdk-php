<?php

namespace CloudPDF\Documents\Types;

enum ListDocumentsRequestSort: string
{
    case CreatedAt = "createdAt";
    case Name = "name";
    case Size = "size";
}
