#include<iostream>
using namespace std;

class A{
	public:
		myfun()
		{
			cout<<"\nthis is function 1";
		}
};
class B:public A{
	public:
		myfun()
		{
			cout<<"\nthis is fuction 2";
		}
};

int main()
{
	B obj;
	obj.myfun();
	obj.A::myfun();
}
