#include<stdio.h>
int main()
{
	int no1, no2, no3, sum;
	printf("Enter First no1:");
	scanf("%d", &no1);
	printf("Enter Second no2:");
	scanf("%d", &no2);
	printf("Enter Thired no3:");
	scanf("%d" , &no3);
	sum=no1+no2+no3;
	printf("%d+%d+%d=%d", no1,no2,no3,sum);
	return 0;
}
