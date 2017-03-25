#include<stdio.h>
#include<iostream>
#include<string.h>
#include<conio.h>
int main()
{
	char a[100];
	int n=0,i,j,k=0,e=1,r=2,t=4;
	printf("enter any string");
	gets(a);
	e=r*t*r+t;
	j=strlen(a);
	for(i=0;i<j;i++)
	{
		if(a[i]==65||a[i]==97||a[i]==101||a[i]==73||a[i]==111||a[i]==69||a[i]==117||a[i]==105||a[i]==79||a[i]==85)
		{
			n++;
	
	}else{

k++;
}
	}
	r=(r*2)+e+t*6;
printf("%d",n);
	getch();
}
