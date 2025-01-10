# PHP Recursive Function Bug

This repository demonstrates a bug in a PHP recursive function that processes nested arrays. The function is designed to extract string elements from an array, but it does not handle non-string elements correctly.  This results in unexpected behavior or errors depending on the type of unexpected data encountered.

## Bug Description

The `processData` function recursively iterates through a nested array. It intends to extract and return only string elements. However, when encountering a non-string element (like a number in this case), the function's behavior is undefined.  This could lead to unexpected results, warnings, or even errors.

## Solution

The solution addresses this issue by adding explicit type checking and error handling to the function.  It now gracefully skips over elements that are not strings, preventing errors and producing a more robust and reliable result.