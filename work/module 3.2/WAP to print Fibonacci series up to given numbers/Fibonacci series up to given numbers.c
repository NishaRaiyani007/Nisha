#include<stdio.h>
int main()
{
	int i,j,m=0, n=1,newterm = m + n;
	
	printf("Enter The Fibonacci Siries:");
	scanf("%d",&j);
	
	printf("\n%d \n%d",m,n);
	
	for(i=3; i<=j; i++)
	{
		printf("\n%d",newterm);
		
    m=n;
	n=newterm;
	newterm=m+n;		
	}
}
