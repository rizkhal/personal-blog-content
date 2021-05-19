%title:Disable button in bootstrap
%date:May 19th, 2021
%slug:disable-button-in-bootstrap
%cover:disabled-button-in-bootstrap.png
%description:Disable button in bootstrap
==========

I assume we all understand how to use bootstrap, so now we immediately create a button using bootstrap.

```php
<button class="btn btn-primary">My Default Button!</button>
```

Add a disabled attribute so that the button cannot be clicked.

```php
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
