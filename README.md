What
---------------------

Attempt at a native C backend for Idris on 9front without a VM, GC or runtime.


Example
-------

on linux:
```
TMPDIR=/tmp/ghc stack exec idris -- hello.idr --codegenonly --codegen 9frontc --output hello.c
```

on 9front:
```
8c -Fvw hello.c
```

Why?
---------------------

It would be nice to have purity, pattern matching and memory safety.
