# PHP Fluent API Class

**FluentApi** is a PHP class that helps you to create a fluent API interface.

### Usage

##### 1. Extend the class `FluentApi` in your class

```php
class FluentMath extends FluentApi
{

}
```

##### 2. Declare your functions

Declare the functions that are chainable with an underscore `_`.

In the example below the functions `_add` and `_subtract` can be chained and plus they can be called statically or not (please check the example of usage).

```php
class FluentMath extends FluentApi
{
    private $result = 0;

    protected function _add($num)
    {
        $this->result += $num;

        return $this;
    }

    protected function _subtract($num)
    {
        $this->result -= $num;

        return $this;
    }

    public function result()
    {
        return $this->result;
    }
}
```

##### 3. Example of usage

```php
$res1 = FluentMath::add(5)
    ->add(3)
    ->subtract(2)
    ->add(8)
    ->result();

$res2 = FluentMath::subtract(1)->add(10)->result();
```
