---
extends: _layouts.post
section: content
title: Spread operator to get rid of duplicate value
date: 2020-05-27
cover_image: /assets/posts/spread-operator-to-get-rid-of-duplicate-value.jpg
description: Javascript spread operator to get rid of duplicate value
categories: [javascript]
---

Distribute the operator to eliminate duplicate values, with javascript we only need to write one line of code like this:

```javascript
const array = [1, 2, 3, 2, 3, 1];
[...new Set(array)]; // spread operator to get rid of duplicate value
// result = [1, 2, 3];
```
