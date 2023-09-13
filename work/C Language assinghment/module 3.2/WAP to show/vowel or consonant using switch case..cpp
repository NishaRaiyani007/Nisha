#include<stdio.h>
int main()
{  
	char ch;
	printf("Enter Your Character:");
	scanf("%c", &ch);
	
	switch (ch){
	
	    case 'a':
	    	 printf("a Is Vovel");
	    	 break ;
	    	 
	    case 'e':
		     printf("e Is Vovel");
			 break ;
			 
	    case 'i':
		     printf("i Is Vovel");
			 break ;
			 
	    case 'o':
		     printf("o Is Vovel");
			 break ;
			 
	    case 'u':
	    	 printf("u Is Vovel");
	    	 break ;
	    default:
		     printf("This is consonent ");
		     break;
		}
		return 0 ;  	
}	    
