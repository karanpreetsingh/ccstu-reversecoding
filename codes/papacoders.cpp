#include <bits/stdc++.h>
using namespace std;
class fac{
    private:
    int v;
    int a;
    char c;
    int *arr;
    public:
    fac(int a);
    int cal(int v,int arr);
  //  int max(int e);
};
fac::fac(int a)
{
    this->a=a;
    arr=new int[a];
  //  arr={3};
}
int cal(int v,int arr[])
{
    int i,s=0;
    for(i=0;i<v;i++)
    s=s+arr[i];
    return s;
}
void factors(int k)
{
    int i,h=0,a[5]={9},s=0;
    for(i=0;i<5;i++)
    s=s+a[i];
    list<int> l(5,k);
    list<int>::iterator t;
    for(t=l.begin();t!=l.end();t++)
    h=h+*t;
    cout<<h/5;
}
int max(int l)
{
//    fac q;
   // cal(4,arr);
    return 0;
}
int main() {
	long long int n,j=0,k=0,l=0,i,a;
	cin>>n;
	vector<vector<int> > v(n);
	fac f(4);
	for(i=0;i<n;i++)
	{
	    cin>>a;
	    v[i].push_back(a);
	    k=a;
	    if(i!=0)
	    {
	       if(k>l)
	       l=k;
	    }
	}
	factors(l);
	max(1);
	return 0;
}
