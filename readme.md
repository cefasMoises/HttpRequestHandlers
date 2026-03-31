![emblem](smallemblemphp.svg)

# Http Request Handlers

this is a package php for handler http request

---

## features

- http request values (get or post)
- http request server variables
- http url handlers

```php

/*code example */

use HttpRequestHandlers/Request;

$request=new Request()

if ($request->get->has('name')){
    echo $request->get->name;
}
```
