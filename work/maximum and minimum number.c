#include<stdio.h>
int main()
{
 
 int number1, number2 ;
        printf("Enter Your Number1:");
        scanf("%d", &number1);
        printf("Enter Your Number2:");
        scanf("%d", &number2);
        if(number1>number2)
        {
        	printf("Number 1 is maximum");
		}else
		{
			printf("Number 2 is minimum");
		}
		return 0 ;
}
