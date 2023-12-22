import random

print(random.randint(1,100))
l=[1,2,3,4,5,"tops","true",1.1,2.2,"python"]
print(random.choice(l))

l=[]
lucky=[]
for i in range(1,101):
    l.append(i)
for i in range(10):
    num=random.choice(l)
    lucky.append(num)
    l.remove(num)
print(l)
print(lucky)














