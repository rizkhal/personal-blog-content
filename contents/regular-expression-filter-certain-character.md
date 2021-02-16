%title:Regular expression certain character
%cover:regular-expression-certain-character.png
%description:Oh shit, regex is so hard
%date:20-02-2020
==========

### Regular expression certain character

What would a regex string look like if you were provided a random string such as :

```javascript
let random = "u23ntfb23nnfj3mimowmndnwm8";
```

and I wanted to filter out certain characters such as 2, b, j, d, g, k and 8?

So in this case, the function would return `2bjd8`.

<!-- ### Lets write code -->

```javascript
var random = "u23ntfb23nnfj3mimowmndnwm8";
var regexp = /[2bjd8]+/g;

alert((random.match(regexp) || []).join(''));
```

To get all the matches use `String.prototype.match()` with your Regex.
