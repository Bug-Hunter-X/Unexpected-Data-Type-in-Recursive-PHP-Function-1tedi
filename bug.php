```php
function processData(array $data): array
{
    $result = [];
    foreach ($data as $item) {
        if (is_array($item)) {
            $result = array_merge($result, $this->processData($item)); // Recursive call
        } else if (is_string($item) && strlen($item) > 0) {
            $result[] = $item;
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