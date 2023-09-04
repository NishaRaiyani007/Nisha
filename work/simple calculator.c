//#include<stdio.h>
//int main()
//{ 
//  char oper;
//  int num1,num2,ans=0;
//  printf("enter any one operator like +,-,*,/,% :");
//  scanf("%c",&oper);
//  printf("enter the values of operands num1:");
//  scanf("%d",&num1);
//  printf("enter the values of oprands num2:");
//  scanf("%d",&num2);
//  
// switch(oper)
//{
// case'+' :ans=num1+num2;
// break;
// case'-' :ans=num1-num2;
// break;
// case'*' :ans=num1*num2;
// break;
// case'/' :ans=num1/num2;
// break;
// 
// case'%' :ans=num1%num2;
// break;
// default :printf("invalid operator ");
//}
// printf("The value =%d",ans);
//}




#include<stdio.h>
int main()
{
     char operator;
	 int num1, num2,ans;
	 
	 printf("Enter any one operator like , +,-,*,/,%  :");
	 scanf("%c",&operator);
	 printf("Enter The First Number:");
	 scanf("%d",&num1);
	 printf("Enter The Second Number:");
	 scanf("%d",&num2);	
	 
	switch(operator) 
	{
	   case '+':
	   ans=num1+num2;
	   break;
	   
	   case '-':
	   ans=num1-num2;
	   break;
	   
	   case '*':
	   ans=num1*num2;
	   break;
	   
	   case '/':
	   ans=num1/num2;
	   break;
	   
	   case '%':
	   ans=num1%num2;
	   break;
	   
	   default:
	    printf("Invalid Opretor");  	
	}
	printf("Ans Is %d",ans);
}
