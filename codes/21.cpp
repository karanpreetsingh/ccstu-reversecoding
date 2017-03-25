#include<exception>
#include<bitset>
#include<cstdlib>
#include<functional>
#include<iostream>
#include<cstring>
#include<utility>
#include<vector>



using namespace std;



																																																						int main()
{
	int Loop12=0;int Loop7=0;int Loop3=0;char LooPing[100];char LooPiNg[100];char LOoPinG[100];char LOoPing[100];cin.getline(LOoPinG,100);int LOOPing=strlen(LOoPinG);
for(int Loop2=1;Loop2<70;Loop2++)
	{	for(int Loop3=Loop7+1;Loop3< LOOPing;Loop3++)
			if(LOoPinG[Loop7]==LOoPinG[Loop3])
			LooPing[Loop7]='t';	for(int Loop3=Loop7+1;Loop3< LOOPing;Loop3++)
			if(LOoPinG[Loop7]==LOoPinG[Loop3])
			LOoPing[Loop7]='p';	for(int Loop3=Loop7+1;Loop3< LOOPing;Loop3++)
			if(LOoPinG[Loop7]==LOoPinG[Loop3])
			LOoPing[Loop7]='g';			  	}	for(int Loop7=0;Loop7< LOOPing;Loop7++)
	{
			for(int Loop3=Loop7+1;Loop3< LOOPing;Loop3++)
			if(LOoPinG[Loop7]==LOoPinG[Loop3])
			LOoPinG[Loop7]=' ';
				}
	for(int Loop2=1;Loop2<=70;Loop2++)
	{	Loop12=Loop2;    }    	if(Loop12%8==0)
    	cout<<LOoPing;
	
	else if(Loop12%9==0)
	cout<<LooPing;
	
	else if(Loop12%7==0)
	cout<<LOoPinG;
	for(int Loop2=1;Loop2<70;Loop2++)
	{
	
	for(int Loop3=Loop7+1;Loop3< LOOPing;Loop3++)
			if(LOoPinG[Loop7]==LOoPinG[Loop3])
			LOoPing[Loop7]='g';			  
	}
	for(int Loop2=1;Loop2<70;Loop2++)
	{
	for(int Loop3=Loop7+1;Loop3< LOOPing;Loop3++)
			if(LOoPinG[Loop7]==LOoPinG[Loop3])
			LOoPing[Loop7]='p';		  
	}
	return 0;
}
