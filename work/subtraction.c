#include<stdio.h>
int main()
{
	int Number1, Number2, Number3, Number4 , Sub;
	printf("Enter your Number1");
	scanf("%d", &Number1);
	printf("Enter your Number2");
	scanf("%d", &Number2);
	printf("Enter your Number3");
	scanf("%d", &Number3);
	printf("Enter your Number4");
	scanf("%d", &Number4);
	Sub=Number1-Number2-Number3-Number4;
	printf("%d-%d-%d-%d=%d", Number1,Number2,Number3,Number4,Sub);
	return 0 ;
}
