```php
function processData(array $data): array
{
    $result = [];
    foreach ($data as $item) {
        if (is_array($item)) {
            $result = array_merge($result, $this->processData($item)); // Recursive call
        } else if (is_string($item) && strlen($item) > 0) {
            $result[] = $item;
        } else {
            // Handle non-string elements gracefully (e.g., log a warning, skip, or throw exception)
            error_log('Warning: Non-string element encountered: ' . var_export($item, true));
        }
    }
    return $result;
}

$data = [
    "apple",
    ["banana", "cherry"],
    ["date", ["fig", "grape"]],
    "",
    123, // Unexpected data type
];

$processedData = processData($data);
print_r($processedData);
```