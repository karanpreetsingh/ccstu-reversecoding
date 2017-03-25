#include <iostream>
#define KAMMO 97
#define KUCHU 96
#define LADEN 57
#define MUCHU 65
#define BABA 48
#define CHHAMMO 122

using namespace std;
int main() {
	char integer;
	
	cout<<"Kuch bhi daal, aane de bas tu";
	cin>>integer;
	
	int character=integer;
	for(int Integer=0;Integer<1;Integer++)
	{
	
	
	if((character>=KAMMO)&&(character<=CHHAMMO))
	{
	character=character+13;
	cout<<"Chhote log chhoti soch";}
	
	else if((character>=MUCHU)&&(character<=KUCHU))
	{
		character=character-89%character;
	cout<<"Tu bada aadmi lagta hai";
}
	else if((character>=BABA)&&(character<=LADEN))
	{
		character=character*character;
	
	cout<<"Robot hai kya";      }
	
	else{
	character=character/LADEN;
	cout<<"Kya ajeeb bhasha hai";
}
	
}
return 0;
}