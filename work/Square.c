#include<stdio.h>
int main()
{
	int side, area;
	
	printf("\n Enter The Length Of Side:");
	scanf("%d",&side);
	
	//formula to calculate area of square
	area = side * side ;
	
	printf("\nArea Of Square: %d", area);
	
	return 0 ;
}
