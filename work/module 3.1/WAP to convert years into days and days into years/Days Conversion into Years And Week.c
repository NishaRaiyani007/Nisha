#include<stdio.h>
int main()
{
	int days, years,day,year;
	printf("Enter The Year:");
	scanf("%d", &years);
	
	days=years * 365 ;
	
	printf("Number Of Days Is %d", days);
	
	printf("\nEnter The Days");
	scanf("%d", &day);
	
	year= day / 365 ; 
	
	printf("Number Of Year Is %d", year);
	return 0;
}
