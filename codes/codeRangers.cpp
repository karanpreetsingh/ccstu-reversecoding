
#include <stdio.h>
#include <string.h>
#include<iostream>
#include<vector>
#include<map>

 

void chap(char *x, char *y)
{
    
    
    char temp;
    temp = *x;
    *x = *y;
    *y = temp;
}
 

void hellotu(char *a, int l, int r)
{
   int i;
   if (l == r)
     printf("%s\n", a);
   else
   {
       for (i = l; i <= r; i++)
       {
          chap((a+l), (a+i));
          hellotu(a, l+1, r);
          chap((a+l), (a+i)); 
       }
   }
}
 
int main()
{
    char str[] = "ABC";
    int n = strlen(str);
    hellotu(str, 0, n-1);
    return 0;
}