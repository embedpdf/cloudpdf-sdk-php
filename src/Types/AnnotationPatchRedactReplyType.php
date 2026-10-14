<?php

namespace CloudPDF\Types;

enum AnnotationPatchRedactReplyType: string
{
    case Reply = "reply";
    case Group = "group";
}
