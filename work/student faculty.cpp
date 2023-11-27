#include<iostream>
using namespace std;
class student
{
	public:
		int id;
	    string name;
	    string subject;
	    
	    void inputdata()
	    {
	    	cout<<"Enter Id:"<<endl;
	    	cin>>id;
	    	cout<<"Enter name:"<<endl;
	    	cin>>id;
	    	cout<<"Enter Subject:"<<endl;
	    	cin>>subject;
		}
		void displaydata()
		{
			cout<<"id:"<<id<<endl;
			cout<<"name:"<<name<<endl;
			cout<<"subject:"<<subject;
		}
};
class faculty
{
	public:
		int id;
		string name;
		string department;
		
		void inputdata()
		{
			cin>>id;
			cout<<"Enter Id:"<<endl;
			cin>>name;
			cout<<"Enter Department:"<<endl;
			cin>>department;
		}
		void displaydata()
		{
			cout<<"Faculty data"<<endl;
			cout<<"Id"<<endl;
			cout<<"Name"<<endl;
			cout<<"Department:"<<department;
		}
};
main()
{
	student s1;
	faculty f1;
	
	s1.inputdata();
	s1.displaydata();
	
	f1.inputdata();
	f1.displaydata();
	
	student obj;
	obj.inputdata();
	obj.displaydata();
}
