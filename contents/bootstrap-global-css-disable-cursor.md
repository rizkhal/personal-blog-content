%title:Custom select2 icon
%date:May 10th, 2021
%slug:custom-select2-icon
%cover:custom-select2-icon.png
%description:How to custom select2 icon
==========

Ok, just go ahead make select option and make sure you have read to [select2 documentation](https://select2.org/getting-started/installation).

Lets write select option

```php
<div class="col">
  <div class="form-group custom-select-icon">
    <select class="custom-select" id="search-student">
      <option></option>
      @foreach ($students as $student)
        <option value="{{ $item->id }}">{{ $student->name }}</option>
      @endforeach
    </select>
  </div>
</div>
```

Lets write custom css for class `custom-select-icon`

```css
.custom-select-icon .select2-selection__arrow {
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e")
    no-repeat right 0.75rem center/8px 10px;
}
```

Lets write javascript for select2

```javascript
$("#search-student").select2({
  allowClear: false,
  placeholder: "Pilih Siswa",
});
```

The result look like
![Example Picture 1](https://i.ibb.co/TcxDdXw/Screenshot-from-2021-05-10-14-53-00.png)

<br/>

![Example Picture 2](https://i.ibb.co/ZWHHFsK/Screenshot-from-2021-05-10-14-53-20.png)

<br/>

Thanks for reading me 💞
