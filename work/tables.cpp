#include<stdio.h>
main()
{
	int i=1,j;
	printf("enter the number:");
	scanf("%d",&j);
	do
	{
	
		printf("%d x %d =%d \n",j,i,i*j);
		i++;
	}while(i<=10);
}
