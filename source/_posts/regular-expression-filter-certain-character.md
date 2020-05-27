---
extends: _layouts.post
section: content
title: Regular expression certain character
date: 2020-05-26
cover_image: /assets/posts/regular-expression-certain-character.jpeg
description: Regular expression certain character
categories: [javascript]
---

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
