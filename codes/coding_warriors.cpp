#include <bits/stdc++.h>
using namespace std;
#define pb push_back
#define CASES int t;cin>>t;while(t--)
#define long long int ll;
#define mod 1000000007
int seive(char str[]);
int seive(char str[])
{
    int d,k=0;
    for(int i=0;i<3;i++)
    {
        for(int j=0;j<50;j++)
            k=k+(int)str[j];
    }
    return 0;
}
int main() {
    int i, j,d,n;
    char str[10][50], temp[50];
    string p;
    map <int,string> m;
    
   /* for(i=0;i<3;i++)
    {
        scanf("%d",d);
        cin>>p;
        m.insert(pair<int,string>(d,p));
    }*/
    cin>>n;
    for(i=0;i<3;i++)
        d=seive(str[i]);
    for(i=0; i<3; ++i)
        scanf("%s[^\n]",str[i]);

  /*  for(i=0;i<3;i++)
    seive(str[i]);*/
    for(i=0; i<2; ++i)
        for(j=i+1; j<3 ; ++j)
        {
            if(strcmp(str[i], str[j])>0)
            {
                strcpy(temp, str[i]);
                strcpy(str[i], str[j]);
                strcpy(str[j], temp);
            }
        }

  
    for(i=0; i<3; ++i)
    {
        puts(str[i]);
    }
    
    return 0;
}
