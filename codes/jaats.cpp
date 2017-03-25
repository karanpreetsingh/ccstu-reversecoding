#include <iostream>
using namespace std;
void reverse()
{
    int arr[]={2,3,234,123123};
    for(int i=0;i<4;i++)
    {
    }
}


int main()
{
    int nqwer,min=0;
    cin>>nqwer;
    int rev[nqwer],k=0,jaats[nqwer];
    
    
    for(int i=0;i<nqwer;i++)
    cin>>rev[i];
    for(int i=0;i<nqwer;i++)
    {   k=0;
        min=0;   
        for(int j=0;j<nqwer;j++)
        {    
        if(rev[j]>=min)
        {
            min=rev[j];
           k=j;
        }
        
        }
        rev[k]=0;
        jaats[i]=min;
    }
    for(int i=0;i<nqwer;i++)
    cout<<jaats[i]<<endl;
    return 0;
}
