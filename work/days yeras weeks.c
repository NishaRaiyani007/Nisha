#include<stdio.h>
main()
{
	float days,years,weeks;
	printf("Enter The Days:");
	scanf("%f",&days);
	
	years=(days/365);
	weeks=(days/7);
	printf("Number Of Years:%.2f \n",years);
	printf("Numbers of week in a year : %.2f",weeks);
}
