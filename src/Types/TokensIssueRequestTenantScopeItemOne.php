<?php

namespace CloudPDF\Types;

enum TokensIssueRequestTenantScopeItemOne: string
{
    case DocsCreate = "docs.create";
    case DocsRead = "docs.read";
    case DocsDelete = "docs.delete";
    case TokensIssueDoc = "tokens.issue-doc";
    case TokensRevoke = "tokens.revoke";
    case SharesManage = "shares.manage";
}
