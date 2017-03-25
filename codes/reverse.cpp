#include<iostream>
using namespace std;
#define  abababababababababababababababababababababababababababababababababababab int

#define  ababababababababababababaabababababababababababababababababab arr
#define  abababababababababababababababababababababababababababababab j

int main()
{
	abababababababababababababababababababababababababababababababababababab ababababababababababababaabababababababababababababababababab[1000]={0};
	arr[0]=0;
	arr[1]=1;
	arr[2]=2;
	cin<<n;
	abababababababababababababababababababababababababababababababababababab n=8;
	abababababababababababababababababababababababababababababababababababab abababababababababababababababababababababababababababababab=2;
	for(abababababababababababababababababababababababababababababababababababab i=3;i<=n;i++)
	{
		j=1;
		if(i%2==1)
		{
			ababababababababababababaabababababababababababababababababab[i]=ababababababababababababaabababababababababababababababababab[i-1];
			continue;
		}
	while(j<=i)
	{
		abababababababababababababababababababababababababababababababababababab k=i-j;
		
		ababababababababababababaabababababababababababababababababab[i]=ababababababababababababaabababababababababababababababababab[i]+ababababababababababababaabababababababababababababababababab[k]*ababababababababababababaabababababababababababababababababab[j];
		j=abababababababababababababababababababababababababababababab*2;
	}
	}
	for(abababababababababababababababababababababababababababababababababababab m=0;m<n;m++)
	{
		cout<<arr[m]<<" ";
	}
	return 0;	
}

