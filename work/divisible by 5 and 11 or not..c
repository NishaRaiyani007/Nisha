#include<stdio.h>
int main ()
{
		 int number;
         printf("Enter Your Number:");
         scanf("%d", &number);
         if(number%5==0 && number%11==0)
         {
         	printf("Found");
		   }else
		   {
		 	printf("Not Fount");
		   }
		   return 0 ;
}
