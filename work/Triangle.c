#include<stdio.h>
int main()
{
	int base, hight, area;
	printf("Enter The Base:");
	scanf("%d", &base);
	printf("Enter The Hight:");
	scanf("%d", &hight);
	area=base*hight/2;
	printf("area is: %d",area);
	return 0 ;
}
