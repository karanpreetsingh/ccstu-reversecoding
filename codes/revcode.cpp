//Maze maro
#include <iostream>
#include <string>
using namespace std;
int main()
{   
    int currypakodabreadpadodacurrypakodabreadpadodacurrypakodabreadpadoda[100], currypakodabreadpakodacurrypakodabreadpadodacurrypakodabreadpadoda[100]={1,1};
            
    
    int n; cin>>n;int c=1;int cc;currypakodabreadpakodacurrypakodabreadpadodacurrypakodabreadpadoda[0]=1;currypakodabreadpakodacurrypakodabreadpadodacurrypakodabreadpadoda[1]=1;
          while(c<=n){ currypakodabreadpadodacurrypakodabreadpadodacurrypakodabreadpadoda[0]=1;
currypakodabreadpadodacurrypakodabreadpadodacurrypakodabreadpadoda[c+1]=1;  cc=c;
while(cc>=1) {
 currypakodabreadpadodacurrypakodabreadpadodacurrypakodabreadpadoda[cc]=currypakodabreadpakodacurrypakodabreadpadodacurrypakodabreadpadoda[cc]+currypakodabreadpakodacurrypakodabreadpadodacurrypakodabreadpadoda[cc-1]; cc--; }
for(int j=0;j<=c;j++)
 cout<<currypakodabreadpakodacurrypakodabreadpadodacurrypakodabreadpadoda[j]<<" ";cout<<"\n";
for(int i=0;i<=c+1;i++)
currypakodabreadpakodacurrypakodabreadpadodacurrypakodabreadpadoda[i]=currypakodabreadpadodacurrypakodabreadpadodacurrypakodabreadpadoda[i];
c++;
 }
}
