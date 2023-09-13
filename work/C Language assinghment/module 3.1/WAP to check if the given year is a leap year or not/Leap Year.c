#include<stdio.h>
int main()
{
	int year;
	printf("Enter The Year:");
	scanf("%d", &year);
	
	if(year%400==0 && year%100==0 || year%4==0)
	{
		printf("%d, The Year Is Leap Year");
	}else
	{
		printf("%d, The Year Is Not Leap Year");
	}
	return 0 ;
}



