# Reference
## Deployment
<details><summary><code>$client-&gt;deployment-&gt;licenseStatus() -> ?DeploymentLicenseStatusResponse</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->deployment->licenseStatus();
```
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Doc
<details><summary><code>$client-&gt;doc-&gt;head($docId, $request) -> ?DocHead200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->head(
    'docId',
    new HeadDocRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;doc-&gt;download($docId, $layerName, $request) -> string</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->download(
    'docId',
    'layerName',
    new DownloadDocRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;doc-&gt;manifest($docId, $layerName, $request) -> ?DocManifest200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->manifest(
    'docId',
    'layerName',
    new ManifestDocRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;doc-&gt;render($docId, $layerName, $pon, $request) -> string</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Render parameters (viewport, format) pass as flat dotted query keys, e.g. `?viewport.kind=width&viewport.width=800`; the full grammar is documented with the viewer.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->render(
    'docId',
    'layerName',
    1,
    new RenderDocRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$pon:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;doc-&gt;text($docId, $layerName, $pon, $request) -> ?DocText200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->text(
    'docId',
    'layerName',
    1,
    new TextDocRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$pon:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Tenants
<details><summary><code>$client-&gt;tenants-&gt;list($request) -> ?TenantsList200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tenants->list(
    new ListTenantsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$cursor:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tenants-&gt;create($request) -> ?TenantsCreate200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tenants->create(
    new TenantsCreateRequest([
        'id' => 'id',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$name:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tenants-&gt;get($tenantId) -> ?TenantsGet200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tenants->get(
    'tenantId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tenantId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tenants-&gt;delete($tenantId)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Destroys the tenant and everything in its namespace — documents, layers, stored bytes, audit history. Irreversible.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tenants->delete(
    'tenantId',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tenantId:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Documents
<details><summary><code>$client-&gt;documents-&gt;list($tenantId, $request) -> ?DocumentsList200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documents->list(
    'tenantId',
    new ListDocumentsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tenantId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$limit:** `?int` 
    
</dd>
</dl>

<dl>
<dd>

**$cursor:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$state:** `?string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documents-&gt;get($tenantId, $id) -> ?DocumentsGet200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documents->get(
    'tenantId',
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tenantId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documents-&gt;delete($tenantId, $id)</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documents->delete(
    'tenantId',
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tenantId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documents-&gt;commit($tenantId, $id, $request) -> ?DocumentsCommit200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documents->commit(
    'tenantId',
    'id',
    new DocumentsCommitRequest([
        'sha256' => 'sha256',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tenantId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$sha256:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documents-&gt;download($tenantId, $id) -> string</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documents->download(
    'tenantId',
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tenantId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documents-&gt;thumbnail($tenantId, $id) -> string</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documents->thumbnail(
    'tenantId',
    'id',
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tenantId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documents-&gt;uploadDirect($tenantId, $id) -> ?DocumentsUploadDirect200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documents->uploadDirect($tenantId, $id): ?DocumentsUploadDirect200Response;
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tenantId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$id:** `string` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;documents-&gt;init($tenantId, $request) -> ?DocumentsInit200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->documents->init(
    'tenantId',
    new DocumentsInitRequest([
        'contentLength' => 1.1,
        'contentSha256' => 'contentSha256',
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tenantId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$contentLength:** `float` 
    
</dd>
</dl>

<dl>
<dd>

**$contentSha256:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$metadata:** `?array` 
    
</dd>
</dl>

<dl>
<dd>

**$idempotencyKey:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$dedupMode:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$docId:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$uploadTtlSec:** `?float` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Tokens
<details><summary><code>$client-&gt;tokens-&gt;issue($tenantId, $request) -> ?TokensIssue200Response</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

kind "tenant" requires the API token — authority mints only downward. Mounted only when the deployment can sign (HS256 mode); asymmetric deployments mint with their own private key.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tokens->issue(
    'tenantId',
    new IssueTokensRequest([
        'body' => TokensIssueRequest::doc(new TokensIssueRequestDoc([
            'sub' => 'sub',
            'docId' => 'docId',
            'scope' => [
                'scope',
            ],
            'expiresIn' => 1,
        ])),
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tenantId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$request:** `TokensIssueRequest` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;tokens-&gt;revoke($tenantId, $jti, $request)</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Mounted only when the deployment enables token revocation.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->tokens->revoke(
    'tenantId',
    'jti',
    new TokensRevokeRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$tenantId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$jti:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$reason:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$expiresAtSeconds:** `?int` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Doc Annotations
<details><summary><code>$client-&gt;doc-&gt;annotations-&gt;list($docId, $layerName, $pon, $request) -> ?DocAnnotationsList200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->annotations->list(
    'docId',
    'layerName',
    1,
    new ListAnnotationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$pon:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;doc-&gt;annotations-&gt;create($docId, $layerName, $pon, $request) -> ?DocAnnotationsCreate200Response</code></summary>
<dl>
<dd>

#### 📝 Description

<dl>
<dd>

<dl>
<dd>

Doc JWTs may instead carry collab scopes (annotations:create:self, …) that refine per-annotation authorship rules; the API token is exempt from both.
</dd>
</dl>
</dd>
</dl>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->annotations->create(
    'docId',
    'layerName',
    1,
    new CreateAnnotationsRequest([
        'body' => [
            'key' => "value",
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$pon:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>

<dl>
<dd>

**$request:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;doc-&gt;annotations-&gt;delete($docId, $layerName, $pon, $annotKey, $request) -> ?DocAnnotationsDelete200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->annotations->delete(
    'docId',
    'layerName',
    1,
    'annotKey',
    new DeleteAnnotationsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$pon:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$annotKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;doc-&gt;annotations-&gt;update($docId, $layerName, $pon, $annotKey, $request) -> ?DocAnnotationsUpdate200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->annotations->update(
    'docId',
    'layerName',
    1,
    'annotKey',
    new UpdateAnnotationsRequest([
        'body' => [
            'key' => "value",
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$pon:** `int` 
    
</dd>
</dl>

<dl>
<dd>

**$annotKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>

<dl>
<dd>

**$request:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Doc Forms
<details><summary><code>$client-&gt;doc-&gt;forms-&gt;get($docId, $layerName, $request) -> ?DocFormsGet200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->forms->get(
    'docId',
    'layerName',
    new GetFormsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;doc-&gt;forms-&gt;exportData($docId, $layerName, $request) -> string</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->forms->exportData(
    'docId',
    'layerName',
    new ExportDataFormsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$format:** `?string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;doc-&gt;forms-&gt;importData($docId, $layerName, $request) -> ?DocFormsImportData200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->forms->importData(
    'docId',
    'layerName',
    new ImportDataFormsRequest([
        'body' => [
            'key' => "value",
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>

<dl>
<dd>

**$request:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;doc-&gt;forms-&gt;reset($docId, $layerName, $fieldKey, $request) -> ?DocFormsReset200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->forms->reset(
    'docId',
    'layerName',
    'fieldKey',
    new ResetFormsRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fieldKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;doc-&gt;forms-&gt;setValue($docId, $layerName, $fieldKey, $request) -> ?DocFormsSetValue200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->forms->setValue(
    'docId',
    'layerName',
    'fieldKey',
    new SetValueFormsRequest([
        'body' => [
            'key' => "value",
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$fieldKey:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>

<dl>
<dd>

**$request:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Doc Metadata
<details><summary><code>$client-&gt;doc-&gt;metadata-&gt;get($docId, $layerName, $request) -> ?DocMetadataGet200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->metadata->get(
    'docId',
    'layerName',
    new GetMetadataRequest([]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Doc Pages
<details><summary><code>$client-&gt;doc-&gt;pages-&gt;delete($docId, $layerName, $request) -> ?DocPagesDelete200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->pages->delete(
    'docId',
    'layerName',
    new DeletePagesRequest([
        'body' => [
            'key' => "value",
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>

<dl>
<dd>

**$request:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;doc-&gt;pages-&gt;flatten($docId, $layerName, $request) -> ?DocPagesFlatten200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->pages->flatten(
    'docId',
    'layerName',
    new FlattenPagesRequest([
        'body' => [
            'key' => "value",
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>

<dl>
<dd>

**$request:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;doc-&gt;pages-&gt;move($docId, $layerName, $request) -> ?DocPagesMove200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->pages->move(
    'docId',
    'layerName',
    new MovePagesRequest([
        'body' => [
            'key' => "value",
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>

<dl>
<dd>

**$request:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

<details><summary><code>$client-&gt;doc-&gt;pages-&gt;rotate($docId, $layerName, $request) -> ?DocPagesRotate200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->pages->rotate(
    'docId',
    'layerName',
    new RotatePagesRequest([
        'body' => [
            'key' => "value",
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>

<dl>
<dd>

**$request:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

## Doc Redactions
<details><summary><code>$client-&gt;doc-&gt;redactions-&gt;apply($docId, $layerName, $request) -> ?DocRedactionsApply200Response</code></summary>
<dl>
<dd>

#### 🔌 Usage

<dl>
<dd>

<dl>
<dd>

```php
$client->doc->redactions->apply(
    'docId',
    'layerName',
    new ApplyRedactionsRequest([
        'body' => [
            'key' => "value",
        ],
    ]),
);
```
</dd>
</dl>
</dd>
</dl>

#### ⚙️ Parameters

<dl>
<dd>

<dl>
<dd>

**$docId:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$layerName:** `string` 
    
</dd>
</dl>

<dl>
<dd>

**$documentPassword:** `?string` — Base64-encoded password for an encrypted document. Valid only with the API token (403 anywhere else). An encrypted document answers 422 DocPasswordRequired when the header is absent. Viewer doc JWTs use the SDK password-session flow instead.
    
</dd>
</dl>

<dl>
<dd>

**$request:** `array` 
    
</dd>
</dl>
</dd>
</dl>


</dd>
</dl>
</details>

