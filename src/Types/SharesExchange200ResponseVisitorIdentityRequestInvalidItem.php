<?php

namespace CloudPDF\Types;

enum SharesExchange200ResponseVisitorIdentityRequestInvalidItem: string
{
    case DisplayName = "displayName";
    case Email = "email";
    case Title = "title";
    case Organization = "organization";
    case OrganizationalUnit = "organizationalUnit";
}
