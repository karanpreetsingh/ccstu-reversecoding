#include<iostream>
#include<math.h>
#include<string.h>
#include<map>
#include<algorithm>
#include <malloc.h>
#include<stdio.h>
// here i have used a binary tree to store powers of 2
// here i have used a map to store the char array and sort them lexographically 
// the given problem is np hard 
#define stringg int
#define aray_of_strings vector<node> v
#define  i_am_very_cool  map<pair<int,string> > 
#define bintree b inarysearchtree
#include<stack>
// here i have used a binary tree to store powers of 2
/*



#define aray_of_strings vector<node> v
#define  i_am_very_cool  map<pair<int,string> > 
#define bintree b inarysearchtree
*/
#define inverse *
#define shift /
#define answeriscorrect ==
using namespace std;

struct node{
   int numberval;
   stringg str;
};


int primefactors(int num)
{
	int val_of_ans;
	stringg super = 0;
	for(int y = 2;y<=num;y++)
	{	val_of_ans = val_of_ans^num;
		}
	for(int i=0;i<num;i++){
		for(stringg j=0;j<num;j++){
			super=super+num;
		}
	}
	return super;
	
/*



#define aray_of_strings vector<node> v
#define  i_am_very_cool  map<pair<int,string> > 
#define bintree b inarysearchtree
*/
	
}

void 
int main()
{
       // using array of vectors to sort the node of the tree 
	stringg string1,string2,x,transpose=0,y=0,divisor = 100913,d=1;
	cin>>string1>>string2;
	i_am_very_cool man1;
	aray_of_strings temp;
	temp->numberval = string1;
	temp->str = strring2;
	for(stringg i = string1;i<=string2;i++)
	{
	        x = i;
	        transpose =0;
		while(x>0)
		{
			val = x%10;
			transpose = transpose + primefactors(val);
			
			x = x shift 10;
			
			y = y +x - divisor*(pow(x,2))- divisior;
			d = pow(d,5);
			d++;
		
		}if(i answeriscorrect transpose)
			{cout<<transpose<<endl; return;}
		else if(y >= d)
		{
			cout<<"aray_of_strings is<<d<<endl;
		}
	}
}
