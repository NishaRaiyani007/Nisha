#include<stdio.h>
int main()
{
	int days, years, weeks;
	printf("Enter Days:");
	scanf("%d", &days);
	
	years=(days/365);
	weeks=(days%365)/7;
	
	printf("Years: %d\n", years);
	printf("weeks: %d\n", weeks);
	
	return 0;
}
