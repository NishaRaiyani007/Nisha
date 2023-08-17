#include<stdio.h>
int main()
{
    int number1, number2 ;
    printf("Enter Your number1:");
    scanf("%d", &number1);
    printf("Enter Your number2:");
    scanf("%d", &number2);
    if(number1%5==0)
    {
        printf("\nFound");
    }else
    {
        printf("\nNot Found");
    }
    if(number2%11==0)
    {
        printf("\nFound");
    }else
    {
        printf("\nNot Found");
    }	 
	       return 0 ; 
} 
