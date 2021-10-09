%title:Understanding object destructuring in javascript
%date:February 23th, 2021
%slug:understanding-object-destructuring-in-javascript-1614041545
%cover:understanding-object-destructuring-in-javascript-1614041545.png
%description:Destructuring object is bind a property from object to a or multiple variable
==========

Lets say we have an object like below

```javascript
const obj = {
  post: {
    title: "this is title",
    body: "this is body",
  },
};
```

And you want to get value of `title` and `body`.

You can do like this

```javascript
const { post } = obj;

console.log(post.title); // this is title
console.log(post.body); // this is body
```

Or you can do like this

```javascript
const {
  post: { title, body },
} = obj;

console.log(post.title); // this is title
console.log(post.body); // this is body
```

Because the `post` property is nested with `title` and `body`.

We also can to get and set default value if propery doens't exists.

```javascript
const {
  post: { title, body, author = "ayu" },
} = obj;
console.log(post.title); // this is title
console.log(post.body); // this is body
console.log(post.author); // ayu
```

If you don't set default value in `author` property, that it return `undefined`
