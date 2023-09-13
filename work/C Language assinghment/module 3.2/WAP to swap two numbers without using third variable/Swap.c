#include<stdio.h>
main()
{
	int a=10 ,b=20;
	
	printf("a is %d and b is %d", a,b);
	
a=a*b; // 10*20=200   10+20=30
b=a/b; // 200/20=10   30-20=10
a=a/b; // 200/10=20   30-10=20

    printf("\n a=%d, b=%d", a,b);	
	
}
