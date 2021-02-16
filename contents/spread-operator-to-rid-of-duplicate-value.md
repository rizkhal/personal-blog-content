%title:Javascript spread operator to get rid of duplicate value
%cover:spread-operator-to-get-rid-of-duplicate-value.png
%description:Filter array with only one line in javascript
%date:20-02-2020
==========

### Javascript spread operator to get rid of duplicate value

Distribute the operator to eliminate duplicate values, with javascript we only need to write one line of code like this:

```javascript
const array = [1, 2, 3, 2, 3, 1];
[...new Set(array)]; // spread operator to get rid of duplicate value
// result = [1, 2, 3];
```
