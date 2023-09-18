#include<stdio.h>
Long int multiplyNumbers(int n);

Int main() 
{
 Int n;
 Printf("Enter a positive integer: ");
 Scanf("%d",&n);
 Printf("Factorial of %d = %ld", n, 
 multiplyNumbers(n));
 Return 0;
}
Long int multiplyNumbers(int n) {
 If (n>=1)
 Return n*multiplyNumbers(n-1);
 Else
 Return 1;
}

