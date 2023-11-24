#include<iostream>
using namespace std;
class student
{
	public:
		student() // default constuctor
		{
			cout<<"welcome to the constructor\n";
		}
		student(int a,int b) //parameterize
		{
			cout<<"a = "<<a;
			cout<<"b = "<<b;
		}
};
main()
{
	student s1=student();
	student s2=student(10,20);
}
