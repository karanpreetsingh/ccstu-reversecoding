#include <stdio.h>
long fraction(int fractions)
{
if(fractions==0||fractions==1)
{
 return 1;
}
else
{
return(fractions*fraction(fractions-1));
}
}

int main()
{
  int i,ffractions,j,fact;
scanf("%d",&ffractions);
int num=ffractions;
for(i=0;i<ffractions;i++)
{
 if(num==-1){
      for(j=0; j<=i; j++){
      fact=fraction(i)/(fraction(j)*fraction(i-j));
       printf("%ld ", fact);}
 }
 else{for(j=0;j<=(ffractions-i-2);j++)
   {
     printf(" ");
    }
  for(j=0; j<=i; j++)
  {
  fact=fraction(i)/(fraction(j)*fraction(i-j));
 printf("%ld ", fact);
  }
  printf("\n");
 }
}
   return 0;
}   
