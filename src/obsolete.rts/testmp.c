
#include <u.h>
#include <libc.h>
#include <mp.h>

struct Constructor {
    int ctype;
    void *arguments; /* pointer to an array of arguments */
};

typedef struct Constructor Constructor;

Constructor *
append (int i, int j, Constructor *returnValue) {
    int is = {i,j};
    is = ;
    returnValue->arguments[0] = i;
    returnValue->arguments[1] = j;
    return returnValue;
}

void
testAppend (void) {
    int *arguments;
    Constructor returnValue;
    int i = 10;

    print("arguments pointer : %p\n",arguments);
    if (nil == (arguments = calloc (2,sizeof(int)))) {
	sysfatal("no memory");
    }
    returnValue.ctype = 1;
    returnValue.arguments = (void*)arguments;

    returnValue = *append((int)10,(int)20,&returnValue);
    print("return value : %d\n",returnValue.ctype);
    print("return value : %d\n",i*-1);

}

void
main (int, char* [])
{
    {
	int x = 10, y  = 20;
	{
	    // The outer block contains declaration of x and y, so
	    // following statement is valid and prints 10 and 20
	    print("x = %d, y = %d\n", x, y);
	    {
		// y is declared again, so outer block y is not accessible
		// in this block
		int y = 40;

		x++;  // Changes the outer block variable x to 11
		y++;  // Changes this block's variable y to 41

		print("x = %d, y = %d\n", x, y);
	    }

	    // This statement accesses only outer block's variables
	    print("x = %d, y = %d\n", x, y);
	}
    }
    testAppend();
    exits(nil);
}

void
main1 (int, char* [])
{
    mpint i;
    mpint *m;
    char *s = "12\0";
    char *r = nil;

    print("testmp starting\n");
    m = &i;
    i = *mpnew(0);
    /*     m = &i; */
    /*     m = mpnew(0); */
    strtomp(s, nil, 10, m);
    fmtinstall('B',mpfmt);
    print("mpint is %B\n",m);
    print("mpint in ascii is %s\n",mptoa(m, 10, r, 0));
    free(r);
    print("mpint in hex is %s\n",mptoa(m, 16, r, 0));
    free(r);
    /*     mpfree(m); */
    mpfree(&i);
    print("testmp exiting\n");
    exits(nil);
}

/* linked list implementation */
/* struct Myshit { int foo; int bar; .... Myshit *next; }. */
/* Myshit *p; .... for(p = myshitlist; p != nil; p = p->next) { ... } */
/* adding shit to a linked list: newshit->next = myshitlist; myshitlist = newshit */
