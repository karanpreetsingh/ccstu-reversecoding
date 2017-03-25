#include<iostream>
using namespace std;
void g(int *A,int n){
    int adi;
    for(int i=1;i<n;++i){
for(int j=0;j<(n-i);++j){
if(A[j]>A[j+1]){
adi=A[j];
A[j]=A[j+1];
A[j+1]=adi;
}
}
}

}
    

int main()
{
int n,temp;
cin>>n;
int a[n];
for(int i=0;i<n;i++)
{
cin>>a[i];
}
int *ptr=a;
g(a,n);
cout<<a[n-2];
return 0;
}