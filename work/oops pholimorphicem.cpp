#include<iostream>
using namespace std;

class A{
	public:
		
	show(int a, int b)
	{
		cout<<"A : "<<a;
		cout<<"B : "<<b;
	}
	show(int n)
	{
		cout<<"N : "<<n;
	}
		
};
int main()
{
	A obj;
	obj.show(10,20);
	obj.show(30);
}



	



