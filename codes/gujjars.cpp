#include <iostream>
using namespace std;

int loop1(int a,int b)
{
     int c,d,ff=0,gg=1,hh=0,ll=1,tt=1;
     c=a;
     d=b;
     ff=c%d;
     ll=1;
     while(c/2!=hh && ll==0)
     {
         tt=2;
         
     }
     tt=2;
     ll/=100;
     while(ll==0 && c!=1 && d !=1 && (tt<c || tt<d))
     {
         if(c%tt==0 && d%tt==0)
         {
            c=c/tt;
            a/=tt;
            d=d/tt;
            b/=tt;
            gg=tt*gg;
         }
        else
        {
            tt++;
        }
     }
     return gg;
}

int loopl(int a,int b,int l)
{
    int gujjars,ansl;
    gujjars=l*a*b;
    ansl=a*b/l;
    
    return ansl;
    return gujjars;
}

int main() {
	int a=0,b=0,c=0,d=0,e=0;
	cout<<a;
	cin>>b;
	cin>>c;
	e=loop1(b,c);
	e=loopl(b,c,e);
    cout<<e;
	return 0;
}
