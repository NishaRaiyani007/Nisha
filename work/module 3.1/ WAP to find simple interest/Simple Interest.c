#include<stdio.h>
int main()
{
	float amount, rate, time, si;
	printf("Enter Amount:");
	scanf("%f", &amount);
	printf("Enter Rate:");
	scanf("%f", &rate);
	printf("Enter Time:");
	scanf("%f", &time);
	si=amount*rate*time/100;
	printf("Simple Interest: %f",si);
	return 0 ; 
}
