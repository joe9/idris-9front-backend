
#include <u.h>
#include <libc.h>

void main (int, char *[]) {
    print("take me to your leader!\n");
    exits(nil);
}

/* linked list implementation */
/* struct Myshit { int foo; int bar; .... Myshit *next; }. */
/* Myshit *p; .... for(p = myshitlist; p != nil; p = p->next) { ... } */
/* adding shit to a linked list: newshit->next = myshitlist; myshitlist = newshit */
