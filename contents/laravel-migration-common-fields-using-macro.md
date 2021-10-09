%title:Laravel migration common fields using macro
%date:October 09th, 2021
%slug:laravel-migration-common-fields-using-macro
%cover:laravel-migration-common-fields-using-macro-1633770850.png
%description:We well learn how to make common fields to laravel migration using laravel macro
==========

When we have same column on many table, we need to rewrite the column type and name on each table, this not efficient when you are a "programmer".

Ok, we will make a provider to handle the macro, you can use `AppServiceProvider` to write it but i recomended using new `ServiceProvider` called `MacroServiceProvider` for consistency if you have many Provider.

<br />
Let's create provider:

```bash
php artisan make:provider MacroServiceProvider
```

```php
use Illuminate\Database\Schema\Blueprint;

public function boot()
{
   Blueprint::macro('commonFields', function () {
      $this->timestamps();
      $this->softDeletes();
      $this->foreignUuid('created_by');
      $this->foreignUuid('updated_by')->nullable();
      $this->foreignUuid('deleted_by')->nullable();
   });
}
```

To use the common fields on migration, you just need to call using `$table->commonFields()`, for example:

```php
public function up()
{
   Schema::create('your_column_name', function (Blueprint $table) {
      $table->id();
      $table->commonFields();
   });
}
```

It's save your time and clean code when you have many table and same column.

Thanks for reading me 🙃
