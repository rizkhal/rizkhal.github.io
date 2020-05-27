---
extends: _layouts.post
section: content
title: Javascript nested functions
date: 2020-05-26
cover_image: /assets/posts/javascript-nested-function.jpg
description: Regular expression certain character
categories: [javascript]
---

A function is called **nested** when it is created inside another function, it is easily possible to do this with javascript. We can use it to organize our code, like this:

```javascript
function sayHiBye(firstName, lastName) {

  // helper nested function to use below
  function getFullName() {
    return firstName + " " + lastName;
  }

  alert( "Hello, " + getFullName() );
  alert( "Bye, " + getFullName() );

}
```

Here the nested function `getFullName()` is made for convenience. It can access the outer variables and so can return the full name. Nested functions are quite common in javascript.
