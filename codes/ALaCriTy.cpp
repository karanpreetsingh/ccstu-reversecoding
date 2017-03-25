#include<iostream>
using namespace std;
class fibo
{
	private:
		
		int x[100];
	public:
		
		void init(int rt)
		{
			for(int i = 0; i<100;i++)    //recursion
			{
				if (i!=(rt-1))
				{
					x[i]=(i+1);
				}
			}
		}
		void showtime()
		{
			for(int i = 0; i<100;i++)
			{
				cout <<x[i]<<" ";
			}
		}
};


int main()
{
	fibo a;
	int n;
	cin >> n;
	a.init(n);
	a.showtime();
	return 0;
}
