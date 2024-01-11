#include<stdio.h>
main()
{
	int i, num, even=0, odd=0 ;
	for(i=1; i=10; i++)
	{
		printf("\n Enter the values:");
		scanf("%d", &num);
		if(num%2==0)
		{
			printf("/Even\n");
			even+=num;
		} else{
			printf("\nodd\n");
			odd+=num;
		}
	 } 
}   



    






