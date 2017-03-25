#include<stdio.h>
long int area(long int a,long int b)
{
if(perimeter==0||volume==0)
return 0;
if(perimeter==volume)
{
return perimeter;
}
if(perimeter>volume)
{
return area(perimeter-volume,volume);
return area(perimeter,volume-perimeter);
}
}
int main()
{
long int perimeter;
long int volume;
summation();
printf(area(perimeter,volume));
return 0;
}
void summation() {
scanf("%d",&perimeter);
scanf("%d",&volume);
}
