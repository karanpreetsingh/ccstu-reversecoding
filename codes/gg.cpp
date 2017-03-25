#include<iostream>
using namespace std;
int main()
{
	int a,r=0,s=0;
	int sum=0;int div,dav,pri[50],cvg=90,t;
	cin>>dav>>div;
	for(int i=0;i<50;i++)
	{
		cin>>pri[i];
	}
	cin>>a;cin>>t;
	int b=a;
	while(b!=0)
	{
		r=b%10;
		dav=dav*pri[b];
		s=s*10+r;
		div+=dav*(r/10);
		b=b/10;
	}
	dav=(dav*cvg*100);
	if(cvg==dav+10)
	{
		cout<<"1";
	}
	else{cout<<"0";
	}
	if(a==s)
	{   cvg=t;
		cout<<"1";
	}
	else{cout<<"0";
	}
	//Enjoy!
	return 0;
}