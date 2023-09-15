#include<stdio.h>
int main()
{
  int num,max=0;
     printf("Enter Number: ");
     scanf("%d",&num);
      
  while(num!=0)
  {
   if(num%10>max)
  {
   max=num%10;
  }
   num/=10;
  }
  printf
  ("Lasgest Number = %d",max);
} 
