%title:Javascript nested function
%cover:javascript-nested-function.png
%description:This is the example of description
%date:20-02-2020
==========

## Javascript nested function

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
