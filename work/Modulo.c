#include<stdio.h>
int main()
{
	int number1, number2, modulo;
	printf("Enter First Number:");
	scanf("%d", &number1);
	printf("Enter Second Number:");
	scanf("%d" , &number2);
	modulo=number1%number2;
	printf("%d%d=%d,number1,number2,modulo");
	return 0 ;
}
