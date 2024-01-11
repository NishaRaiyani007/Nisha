#include<stdio.h>
int main()
{
 
 int num,sum=0,i;
 
 printf("Input A Number:");
 scanf("%d",&num);
 
 while(num!=0)
 {
 	i=num%10;
 	sum = sum * 10+i;
 	num = num/10;
 }
 printf("The Number In Reverse Order Is:%d \n",sum);
}







