#include<iostream>
using namespace std;
int main()
{
	char s[5];
	cout<<"ENTER A NUmeric Value";
	int c=0;
	for(int i=0;i<5;i++)
	{
		cin>>s[i];
		c++;
	}

char t[5];
for(int i=0;i<c;i++)
{
	if(int(s[i])>=97 && int(s[i])<=122)
	t[i]=char(int(s[i])-32);
}
int f;			
for(int j=65;j<=90;j++)
{
	f=0;
	for(int k=0;k<c;k++)
     {
     	if(int(t[k])==j)
     	f++;
     }
     if(f!=0)
cout<<"FREQ of "<<char(j)<<" is :"<<f<<endl;
}
return(0);
}

