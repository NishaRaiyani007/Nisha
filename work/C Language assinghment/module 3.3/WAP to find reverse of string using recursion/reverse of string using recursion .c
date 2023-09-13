#include <stdio.h>
Void reverseSentence();
Int main() {
 Printf("Enter a sentence: ");
 reverseSentence();
 return 0;
}
Void reverseSentence() {
 Char c;
 Scanf("%c", &c);
 If (c != '\n') {
 reverseSentence();
 printf("%c", c);
 }
}

