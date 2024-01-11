 #include<stdio.h>
 int main()
 {
        int number1, number2;
        printf("Enter Your Number1:");
        scanf("%d", &number1);
        printf("Enter Your Number2:");
        scanf("%d", &number2);
    
        if(number1%5==0 && number2%11==0) 
        {
        	printf("Found");
		}else
		{
			printf("Not Found");
		}
		return 0 ;
}
