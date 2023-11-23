#include<iostream>
using namespace std;
class student
{
	public:
		int id;
		string name;
		string subject;
		void setid(int id)
		{
			this->id = id;
		}
		int getid()
		{
			return this->id;
		}
		void setname(string name)
		{
			this->name = name;
		}
		string getname()
		{
			return this->name;
		}
};
main()
{
	student s1;
	s1.setid(10);
	cout<<s1.getid();
	
	s1.setname("\nnisha");
	cout<<s1.getname();
}
