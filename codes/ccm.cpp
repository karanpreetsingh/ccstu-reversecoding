#include<iostream>
#include<string.h>
#include<math.h>
using namespace std;
string guessthefunc(string xyz)
{
	int n=xyz.length();
	for(int i=0;i<n/2;i++)
	{swap(xyz[i],xyz[n-i-1]);}
	return xyz;}
int main()
{
    int n;
    int b,c;
    string factorial;
	string k=factorial;
	cin>>factorial;

	
	string y=guessthefunc(factorial);
	if(y==factorial)
	cout<<"yup ";
	else
	cout<<"no ";
	}

