<?php

namespace CloudPDF\Documents\Types;

enum DocumentsInitRequestUploadPreference: string
{
    case Auto = "auto";
    case Presigned = "presigned";
    case Proxy = "proxy";
}
