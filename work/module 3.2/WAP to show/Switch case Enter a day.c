#include<stdio.h>
int main()
{
	      int day;
          printf("Enter a day:");
          scanf("%d", &day);
          switch(day)
          {
          	case 1:
          		printf("Monday");
          		break;
          		
          	case 2:
			  printf("Thusday");
			  break;
        
                case 3:
			    printf("Wensday");
				break;
				
			case 4:
			    printf("Thearsday");
				break;
				
			case 5:
			     printf("Firday");
				 break;
				 
		    case 6:
			      printf("Suterday");
				  break;
				  
			case 7:
			       printf("Sunday");
				   break;
		    default:
			      printf("No Found");		   
				   		  		 		  	
		  }
}
