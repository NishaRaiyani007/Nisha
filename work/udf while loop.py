import udf2

while True:

    print("**********************")
    print("1.max of two")
    print("2.max of three")
    print("3.odd even")
    print("4.pattern")
    print("5.prime")
    print("***********************")
    choice=int(input("enter your choice :"))

    if choice==1:
        a=int(input("enter value :"))
        b=int(input("enter value :"))
        UDF.maxoftwo(a,b)
        print("***********************")

    elif choice==2:
        a=int(input("enter value :"))
        b=int(input("enter value :"))
        c=int(input("enter value :"))
        UDF.maxofthree(a,b,c)
        print("***********************")

    elif choice==3:
        
        a=int(input("enter value : "))
        UDF.oddeven(a)
        print("***********************")

    elif choice==4:
        a=int(input("enter number of rows : "))
        UDF.pattern(a)
        print("***********************")

    elif choice==5:
        a=int(input("enter value : "))
        UDF.prime(a)
        print("***********************")
        
    else:
        print("thank you for using our services")
        print("***********************")
        break

        print("server not found")
         

