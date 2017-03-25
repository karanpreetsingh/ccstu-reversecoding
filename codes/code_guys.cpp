#include <iostream>
#include <vector>
#define R 5
using namespace std;
void f1(int* a,int* b)
{
    int buf = *a;
    *a = *b;
    *b = buf;
}
vector<int> f(vector<int>A)
{
    int x = -1;
    for(int i=x+1; ;i+=1)
    {
        if(i==A.size())
        break;
        int k = i;
        for(int j=x+1;j<A.size()-k;j++)
            if(A[j+1]>A[j])
               f1(&A[j+1],&A[j]);
    }
    return A;
}
int main()
{
    int k;
   vector<int>A;
   vector<int>r;
   r.push_back(R);
   for(int i=0;i<r[0];i++)
   {
       cin>>k;
       A.push_back(k);
   }
   A = f(A);
   
   for(int i=0;i<A.size();i++)
   {
       cout<<A[i]<<" ";
   }
   return 0;
}

