%title:Disabled cursor using global css in bootstrap
%date:May 10th, 2021
%slug:disabled-cursor-using-global-css-in-bootstrap
%cover:disabled-cursor-using-global-css-in-bootstrap.png
%description:When bootstrap not auto not allowed cursor
==========

I assume we all understand how to use bootstrap, so now we immediately create a button using bootstrap.

```html
<button class="btn btn-primary">My Default Button!</button>
```

Add a disabled attribute so that the button cannot be clicked.

```html
<button class="btn btn-primary" disabled>My Disable Button!</button>
```

In some templates such as ![stisla](https://demo.getstisla.com/bootstrap-buttons.html) cursor is not disabled.

Now let's make the cursor disabled globally using just one css line.

```css
.btn[disabled] {
  cursor: not-allowed !important;
}
```

Now the cursor on all buttons that use the disabled attribute will be not-allowed.

Thanks for reading me 💞
