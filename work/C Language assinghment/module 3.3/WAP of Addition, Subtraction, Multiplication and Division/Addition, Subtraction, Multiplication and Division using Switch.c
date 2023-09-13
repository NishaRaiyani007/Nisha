#include<stdio.h>
main()
{
char choice;
float a,b,ans=0;
printf("\tEnter your choice \n\t1 for +\n\t 2 for - \n\t 3 for * \n\t 4 for / \n\t :");
scanf("%c",&choice);
switch(choice)
{
case '1':
{
printf("Enter 2 number :");
scanf("%f%f",&a,&b);
ans=a+b;
printf("Addition=%0.2f",ans);
break;
}
case '2':
{
printf("Enter 2 number :");
scanf("%f%f",&a,&b);
ans=a-b;
printf("Subtraction=%0.2f",ans);
break;
}
case '3':
{
printf("Enter 2 number :");
scanf("%f%f",&a,&b);
ans=a*b;
printf("Multiplication=%0.2f",ans);
break;
}
case '4':
{
printf("Enter 2 number :");
scanf("%f%f",&a,&b);
ans=a/b;
printf("Division=%0.2f",ans);
break;
}
}
}

