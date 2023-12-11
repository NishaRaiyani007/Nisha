def pattern(n):
    for i in range(1,n):
        print(" "*(9-i)," *"*i)
    for i in range(n, 0, -1):
        print(" "*(9-i)," *"*i)
pattern(10)       
